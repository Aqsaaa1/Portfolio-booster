<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqsa Malik | Creative Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fffaf6;
            color: #1c1c1c;
            scroll-behavior: smooth;
        }

        nav {
            background-color: #132043;
        }

        nav a {
            color: #fff !important;
            font-weight: 600;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5rem 2rem;
            background: linear-gradient(to right, #ffe5b4, #fffaf6);
        }

        .hero-text h1 {
            font-size: 3.2rem;
            font-weight: 700;
            color: #132043;
        }

        .hero-text p {
            font-size: 1.2rem;
            color: #333;
        }

        .btn-custom {
            background-color: #f77f00;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #d65b00;
        }

        .section-title {
            text-align: center;
            margin: 4rem 0 2rem;
            font-weight: 700;
            color: #132043;
        }

        .about {
            background-color: #fff;
            padding: 4rem 2rem;
        }

        .services,
        .skills,
        .projects,
        .contact {
            padding: 4rem 2rem;
        }

        .service-card,
        .project-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: transform 0.3s;
        }

        .service-card:hover,
        .project-card:hover {
            transform: translateY(-8px);
        }

        .skills .progress {
            height: 10px;
            border-radius: 5px;
            background-color: #f0f0f0;
        }

        .skills .progress-bar {
            background-color: #f77f00;
        }

        footer {
            background-color: #132043;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        img {
            max-width: 100%;
            border-radius: 15px;
        }
    </style>
</head>

<body>




    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">Aqsa Malik</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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

    <section class="hero">
        <div class="hero-text col-md-6">
            <h1>Hello, I’m <span style="color:#f77f00;">Aqsa Malik</span></h1>
            <p>A passionate Full Stack Laravel Developer crafting smooth digital experiences with clean code and creative design.</p>
            <a href="#projects" class="btn-custom">View My Work</a>
        </div>
        <div class="col-md-5 text-center">
            <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=700" alt="Aqsa Malik">
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="section-title">About Me</h2>
        <div class="container text-center">
            <p class="lead mx-auto" style="max-width:800px;">
                I’m a detail-oriented Laravel developer specializing in building portfolio, eCommerce, and real-time applications.
                I focus on clean architecture, service layers, and pixel-perfect frontend design integration.
            </p>
        </div>
    </section>

    <section class="services" id="services">
        <h2 class="section-title">My Services</h2>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h5>Web Development</h5>
                        <p>Custom Laravel backend systems with modern UI integration.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h5>API Design</h5>
                        <p>RESTful API creation with authentication and data handling.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <h5>UI/UX Design</h5>
                        <p>Responsive, aesthetic, and user-focused interfaces.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="section-title">Skills</h2>
        <div class="container">
            <div class="mb-3">
                <h6>Laravel</h6>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%;"></div>
                </div>
            </div>
            <div class="mb-3">
                <h6>JavaScript</h6>
                <div class="progress">
                    <div class="progress-bar" style="width: 85%;"></div>
                </div>
            </div>
            <div class="mb-3">
                <h6>Bootstrap / CSS</h6>
                <div class="progress">
                    <div class="progress-bar" style="width: 95%;"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="section-title">Projects</h2>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="project-card">
                        <h5 class="mt-3">Resume Builder API</h5>
                        <p>Dynamic resume creation using Laravel API & Blade templates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600" alt="Project 2">
                        <h5 class="mt-3">Portfolio Website</h5>
                        <p>Personal branding portfolio with multiple design templates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1525182008055-f88b95ff7980?w=600" alt="Project 3">
                        <h5 class="mt-3">Chat Application</h5>
                        <p>Real-time chat built with Laravel Reverb & Livewire.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="section-title">Contact Me</h2>
        <div class="container">
            <form class="mx-auto" style="max-width:600px;">
                <input type="text" class="form-control mb-3" placeholder="Your Name">
                <input type="email" class="form-control mb-3" placeholder="Your Email">
                <textarea class="form-control mb-3" rows="4" placeholder="Message"></textarea>
                <button class="btn-custom w-100">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>© 2025 Aqsa Malik — Crafted with 💛 & Laravel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>