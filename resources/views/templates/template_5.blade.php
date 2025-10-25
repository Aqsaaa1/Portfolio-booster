<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqsa Malik | Full Stack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #0e0e0e;
            color: #fff;
            scroll-behavior: smooth;
        }

        nav {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 215, 0, 0.2);
        }

        nav a {
            color: #fff !important;
            font-weight: 600;
            text-transform: uppercase;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffd700 !important;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 4rem 2rem;
            background: linear-gradient(to right, #0e0e0e, #1a1a1a);
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #ffd700;
        }

        .hero-text p {
            font-size: 1.1rem;
            color: #ddd;
            margin-top: 1rem;
        }

        .btn-custom {
            background-color: #ffd700;
            color: #000;
            font-weight: 600;
            border-radius: 30px;
            padding: 10px 25px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #c9a700;
            color: #fff;
        }

        .section-title {
            text-align: center;
            margin: 4rem 0 2rem;
            font-weight: 700;
            color: #ffd700;
        }

        .about,
        .services,
        .skills,
        .projects,
        .contact {
            padding: 4rem 2rem;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            transition: 0.4s;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            border-color: #ffd700;
        }

        .skills .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #222;
        }

        .skills .progress-bar {
            background-color: #ffd700;
        }

        .project-card img {
            border-radius: 15px;
        }

        footer {
            background-color: #000;
            color: #999;
            text-align: center;
            padding: 1.5rem;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body>

    <!-- 🔹 Top Bar (Visible only when viewing a saved portfolio) -->
    @if(isset($portfolio) && isset($portfolio->id) && !($shared ?? false))
    <div class="top-bar" id="download-btn-div">
        <form action="{{ route('portfolio.sendLink') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $portfolio->id }}">
            <button type="submit" class="btn btn-primary">Send Portfolio Link to My Email</button>
        </form>

        @if(session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sent!',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        </script>
        @endif
    </div>
    @endif


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">{{ $portfolio->name ?? 'Aqsa' }}.</a>
            <button class="navbar-toggler bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-text col-md-6">
            <h1>Hi, I'm {{ $portfolio->name ?? 'Aqsa malik' }}</h1>
            <p>{{ $portfolio->bio ?? 'A passionate Full Stack Laravel Developer who turns complex ideas into elegant web experiences. I love clean code, design harmony, and backend precision.'}}</p>
            <a href="#projects" class="btn-custom mt-3">Explore My Work</a>
        </div>
        <div class="col-md-5 text-center">

            @php
            $defaultHeroImages = [
            'https://images.unsplash.com/photo-1525182008055-f88b95ff7980?w=700',
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=700',
            'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=700',
            ];

            $heroImage = $portfolio->profile_image
            ? asset('storage/'.$portfolio->hero_image)
            : $defaultHeroImages[array_rand($defaultHeroImages)];
            @endphp

            <img src="{{ $heroImage }}" class="img-fluid rounded" alt="{{ $portfolio->name ?? 'User' }}">

        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <h2 class="section-title">{{ $portfolio->about_title ?? 'About Me' }}</h2>
        <div class="container">
            <div class="glass-card text-center mx-auto" style="max-width:800px;">
                <p>{{ $portfolio->about_description ?? 'I specialize in crafting responsive, secure, and scalable web applications using Laravel, Blade, and RESTful APIs. I focus on creating elegant solutions with modern design patterns like the Service Layer architecture.'}}</p>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <h2 class="section-title">My Services</h2>
        <div class="container">
            <div class="row g-4">
                @php
                $services = json_decode($portfolio->services ?? '[]');
                if(!$services) {
                $services = [
                (object)['title'=>'Web Development','description'=>'Building fast and responsive web apps.'],
                (object)['title'=>'UI/UX Design','description'=>'Designing clean and intuitive interfaces.'],
                (object)['title'=>'API Integration','description'=>'Integrating robust APIs seamlessly.'],
                (object)['title'=>'API Integration','description'=>'Integrating robust APIs seamlessly.']
                ];
                }
                @endphp
                @foreach($services as $service)

                <div class="col-md-4">
                    <div class="glass-card text-center">
                        <h5 class="text-warning">{{ $service->title }}</h5>
                        <p>{{ $service->description }}</p>
                    </div>

                </div>

                @endforeach

            </div>
        </div>
    </section>

    @php
    $skills = json_decode($portfolio->skills ?? '[]');

    if(!$skills || count($skills) === 0) {
    // Default skills with default levels
    $skills = [
    (object)['name'=>'HTML','level'=>95],
    (object)['name'=>'CSS','level'=>90],
    (object)['name'=>'JavaScript','level'=>85],
    (object)['name'=>'Laravel','level'=>80],
    ];
    } else {
    // User provided skills (just names), assign default levels
    $defaultLevels = [90, 85, 80, 75, 70, 65, 60]; // any percentages you like
    $skills = array_map(function($skill, $index) use ($defaultLevels) {
    return (object)[
    'name' => $skill,
    'level' => $defaultLevels[$index % count($defaultLevels)]
    ];
    }, $skills, array_keys($skills));
    }
    @endphp

    <div class="container col-md-6">
        @foreach($skills as $skill)
        <div class="mb-3">
            <h6>{{ $skill->name }}</h6>
            <div class="progress">
                <div class="progress-bar" style="width: {{ $skill->level }}%;"></div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- Projects -->
    <section class="projects" id="projects">
        <h2 class="section-title">Projects</h2>
        <div class="container">
            <div class="row g-4">
                @php
                $projects = json_decode($portfolio->projects ?? '[]');
                if(!$projects) {
                $projects = [
                (object)['title'=>'Portfolio Website','description'=>'Personal website showcasing projects.','image'=>'https://via.placeholder.com/600','link'=>'#'],
                (object)['title'=>'Resume Builder','description'=>'Dynamic resume generator with PDF export.','image'=>'https://via.placeholder.com/600','link'=>'#']
                ];
                }
                @endphp
                @foreach($projects as $project)

                <div class="col-md-4">
                    <div class="glass-card project-card">

                        @php
                        $imagePath = null;

                        if (isset($project->image) && is_string($project->image)) {
                        $imagePath = str_contains($project->image, 'http')
                        ? $project->image
                        : asset('storage/' . $project->image);
                        } elseif (isset($project->image) && is_object($project->image)) {
                        $path = $project->image->path ?? $project->image->url ?? null;
                        if ($path) {
                        $imagePath = str_contains($path, 'http')
                        ? $path
                        : asset('storage/' . $path);
                        }
                        }

                        $defaultImages = [
                        'https://picsum.photos/600/400?random=1',
                        'https://picsum.photos/600/400?random=2',
                        'https://picsum.photos/600/400?random=3',
                        'https://picsum.photos/600/400?random=4',
                        'https://picsum.photos/600/400?random=5',
                        ];
                        $imagePath = $imagePath ?? $defaultImages[array_rand($defaultImages)];
                        @endphp

                        <img src="{{ $imagePath }}" class="img-fluid mb-3 rounded shadow-sm" alt="{{ $project->title }}" width="300px">


                        <h5 class="mt-3 text-warning">{{ $project->title }}</h5>
                        <p>{{ $project->description }}</p>

                    </div>
                </div>
                @endforeach







            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <h2 class="section-title">Contact Me</h2>
        <div class="container">
            <div class="glass-card mx-auto" style="max-width:600px;">
                <form>
                    <input type="text" class="form-control mb-3 bg-dark text-white border-0" placeholder="Your Name">
                    <input type="email" class="form-control mb-3 bg-dark text-white border-0" placeholder="Your Email">
                    <textarea class="form-control mb-3 bg-dark text-white border-0" rows="4" placeholder="Message"></textarea>
                    <button class="btn-custom w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 Aqsa Malik | Designed with ✨ by {{ $portfolio->name ?? 'Aqsa malik' }}</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>