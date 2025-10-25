<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class PortfolioController extends Controller
{
    // Landing page
    public function templates()
    {
        return view('templates_landing');
    }

    // Preview selected template
    public function preview($id)
    {
        // Create a dummy portfolio object
        $portfolio = (object) [
            'name' => 'John Doe',
            'title' => 'Full Stack Developer',
            'bio' => 'I am a passionate developer who loves creating web applications using Laravel and modern technologies.',
            'about_title' => 'About Me',
            'about_description' => 'This is a preview of how your About section will look once you fill out your portfolio information.',
            'skills' => json_encode(['Laravel', 'Vue.js', 'React', 'MySQL']),
            'services' => json_encode([
                ['title' => 'Web Development', 'description' => 'Building dynamic and responsive websites'],
                ['title' => 'API Development', 'description' => 'Creating RESTful APIs using Laravel']
            ]),
            'projects' => json_encode([
                ['title' => 'Portfolio Website', 'description' => 'A showcase of personal projects and experience', 'image' => null],
                ['title' => 'Chat App', 'description' => 'A real-time chat application built with Laravel Reverb', 'image' => null],
            ]),
            'profile_image' => null,
        ];

        return view("templates.template_$id", compact('portfolio'));
    }


    // Show form for template
    public function edit($template_id)
    {
        $portfolio = auth()->user()->portfolio ?? null;
        return view('forms.portfolio_form', compact('portfolio', 'template_id'));
    }

    // Save form data
    public function update(Request $request, $template_id)
    {
        $data = $request->all();
        $portfolio = auth()->user()->portfolio ?? new Portfolio();

        $portfolio->user_id = auth()->id();
        $portfolio->template_id = $template_id;
        $portfolio->name = $data['name'];
        $portfolio->title = $data['title'];
        $portfolio->bio = $data['bio'];
        $portfolio->skills = json_encode($data['skills'] ?? []);
        $portfolio->services = json_encode($data['services'] ?? []);
        $portfolio->projects = json_encode($data['projects'] ?? []);
        $portfolio->save();

        return redirect()->route('portfolio.view', $portfolio->id);
    }

    // Show final portfolio with user data
    public function view($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Pass template ID as variable for Blade
        $currentTemplate = 'template_' . $portfolio->template_id;

        return view("templates.template_{$portfolio->template_id}", compact('portfolio', 'currentTemplate'));
    }

    public function form($template)
    {
        // Send template id to the form
        return view('forms.portfolio_form', compact('template'));
    }


    // Store user portfolio data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'bio' => 'required|string',
            'profile_image' => 'required|image|max:2048',
            'projects.*.image' => 'nullable|image|max:2048',
        ]);

        $portfolio = new Portfolio();
        $portfolio->user_id = Auth::id();
        $portfolio->template_id = $request->template;
        $portfolio->name = $request->name;
        $portfolio->title = $request->title;
        $portfolio->bio = $request->bio;
        $portfolio->about_title = $request->about_title ?? 'About Me';
        $portfolio->about_description = $request->about_description ?? '';
        $portfolio->skills = json_encode($request->skills ?? []);
        $portfolio->services = json_encode($request->services ?? []);

        // ✅ Upload profile image
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('portfolio', 'public');
            $portfolio->profile_image = $path;
        }

        // ✅ Handle project images
        $projects = $request->projects ?? [];
        foreach ($projects as $index => $project) {
            if (isset($project['image']) && $project['image'] instanceof \Illuminate\Http\UploadedFile) {
                $imagePath = $project['image']->store('portfolio/projects', 'public');
                $projects[$index]['image'] = $imagePath;
            }
        }
        $portfolio->projects = json_encode($projects);

        $portfolio->save();

        return redirect()->route('portfolio.view', $portfolio->id);
    }


    // View portfolio
    public function portfolioview($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $currentTemplate = 'template_' . $portfolio->template_id;
        return view("templates.template_{$portfolio->template_id}", compact('portfolio', 'currentTemplate'));
    }

    


    public function sharedView($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $shared = true; // flag for Blade

        // Pass the flag so Blade knows this is a shared view
        return view("templates.template_{$portfolio->template_id}", compact('portfolio', 'shared'));
    }

    public function sendPortfolioLink(Request $request)
    {
        $portfolio = Portfolio::findOrFail($request->id);

        // Shared URL instead of normal view
        $link = route('portfolio.shared', $portfolio->id);

        Mail::raw("Here is your portfolio link: $link", function ($message) {
            $message->to(Auth::user()->email)
                ->subject('Your Portfolio Link');
        });

        return back()->with('success', 'Portfolio link sent to your email!');
    }
}

