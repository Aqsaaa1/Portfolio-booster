<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $portfolio->name ?? 'John Doe' }} - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f6f6f6;
            color: #333;
            overflow-x: hidden;
        }

        /* =============== SIDEBAR =============== */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 250px;
            background: linear-gradient(180deg, #ff6600, #ff944d);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
            text-align: center;
            z-index: 100;
        }

        .sidebar img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #fff;
        }

        .sidebar h3 {
            margin-bottom: 5px;
            font-weight: 700;
        }

        .sidebar p {
            font-size: 14px;
            color: #f3f3f3;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            margin: 15px 0;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #333;
            background: #fff;
            padding: 5px 10px;
            border-radius: 20px;
        }

        /* =============== TOP BAR (DOWNLOAD BAR) =============== */
        .top-bar {
            position: fixed;
            top: 0;
            left: 250px;
            /* start after sidebar */
            width: calc(100% - 250px);
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 10px 25px;
            z-index: 200;
        }

        .download-btn {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .download-btn:hover {
            background-color: #0056b3;
        }

        /* =============== CONTENT =============== */
        .content {
            margin-left: 270px;
            padding: 100px 50px 60px;
            /* extra top padding to avoid overlap with top-bar */
        }

        .hero {
            background: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .hero h1 span {
            color: #ff6600;
        }

        .section {
            margin-top: 60px;
        }

        .section h2 {
            font-weight: 700;
            margin-bottom: 25px;
            color: #ff6600;
        }

        .service-card,
        .skill-card,
        .project-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: 0.3s;
        }

        .service-card:hover,
        .project-card:hover {
            transform: translateY(-5px);
        }

        footer {
            margin-top: 80px;
            text-align: center;
            color: #777;
            padding-bottom: 30px;
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




    <div id="portfolio-content">
        <!-- 🔸 Sidebar -->
        <div class="sidebar">
            @php
            $defaultProfiles = [
            'https://i.pravatar.cc/150?img=1',
            'https://i.pravatar.cc/150?img=2',
            'https://i.pravatar.cc/150?img=3',
            'https://i.pravatar.cc/150?img=4',
            ];

            $profileImage = $portfolio->profile_image
            ? asset('storage/'.$portfolio->profile_image)
            : $defaultProfiles[array_rand($defaultProfiles)];
            @endphp

            <img src="{{ $profileImage }}" alt="Profile" width="120" height="120">
            <h3>{{ $portfolio->name ?? 'John Doe' }}</h3>
            <p>{{ $portfolio->title ?? 'Full Stack Developer' }}</p>

            <div class="mt-4">
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>

        <!-- 🔸 Main Content -->
        <div class="content">
            <section class="hero">
                <h1>Hello, I’m <span>{{ $portfolio->name ?? 'John' }}</span></h1>
                <p>{{ $portfolio->bio ?? 'I am a passionate full stack developer who loves building web applications and beautiful interfaces.' }}</p>
                <a href="" class="btn btn-warning mt-3">Hire me</a>
            </section>

            <section id="about" class="section">
                <h2>{{ $portfolio->about_title ?? 'About Me' }}</h2>
                <p>{{ $portfolio->about_description ?? 'I specialize in Laravel, JavaScript, and modern web technologies. I aim to create elegant, user-friendly solutions for real-world problems.' }}</p>
            </section>

            <section id="services" class="section">
                <h2>Services</h2>
                <div class="row g-4">
                    @php
                    $services = json_decode($portfolio->services ?? '[]');
                    if(!$services) {
                    $services = [
                    (object)['title'=>'Web Development','description'=>'Building fast and responsive web apps.'],
                    (object)['title'=>'UI/UX Design','description'=>'Designing clean and intuitive interfaces.'],
                    (object)['title'=>'API Integration','description'=>'Integrating robust APIs seamlessly.']
                    ];
                    }
                    @endphp
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="service-card text-center">
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section id="skills" class="section">
                <h2>Skills</h2>
                <div class="row g-3">
                    @php
                    $skills = json_decode($portfolio->skills ?? '[]');
                    if(!$skills) {
                    $skills = ['HTML','CSS','JavaScript','Laravel'];
                    }
                    @endphp
                    @foreach($skills as $skill)
                    <div class="col-md-3">
                        <div class="skill-card text-center p-3">{{ $skill }}</div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section id="projects" class="section">
                <h2>Projects</h2>
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
                    <div class="col-md-6">
                        <div class="project-card">
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

                            <img src="{{ $imagePath }}" class="img-fluid mb-3 rounded shadow-sm" alt="{{ $project->title }}">
                            <h5>{{ $project->title }}</h5>
                            <p>{{ $project->description }}</p>
                            @if(isset($project->link))
                            <a href="{{ $project->link }}" target="_blank" class="btn btn-outline-primary btn-sm">View Project</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <section id="contact" class="section">
                <h2>Contact Me</h2>
                <form class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-warning px-5 py-2">Send Message</button>
                    </div>
                </form>
            </section>

            <footer>
                <p>© 2025 {{ $portfolio->name ?? 'John Doe' }} — All Rights Reserved</p>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const downloadBtn = document.getElementById("download-pdf");
            if (!downloadBtn) return;

            downloadBtn.addEventListener("click", async function() {
                const {
                    jsPDF
                } = window.jspdf;

                document.getElementById("download-btn-div").style.display = "none";

                const portfolio = document.getElementById("portfolio-content");
                const canvas = await html2canvas(portfolio, {
                    scale: 2,
                    useCORS: true
                });
                const imgData = canvas.toDataURL("image/png");

                const pdf = new jsPDF("p", "mm", "a4");
                const imgProps = pdf.getImageProperties(imgData);
                const pdfWidth = pdf.internal.pageSize.getWidth();
                const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

                pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);
                pdf.save("MyPortfolio.pdf");

                document.getElementById("download-btn-div").style.display = "block";
            });
        });
    </script> -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>