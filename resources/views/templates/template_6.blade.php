<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #111;
            color: #eee;
            overflow-x: hidden;
        }

        nav {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        nav a {
            color: #f0c14b;
            font-weight: 500;
            margin: 0 15px;
            text-decoration: none;
            transition: 0.3s;
        }

        nav a:hover {
            color: #fff;
        }

        .hero {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            animation: fadeDown 1s ease forwards;
        }

        .hero p {
            font-size: 1.2rem;
            color: #ddd;
            max-width: 600px;
            animation: fadeUp 1.3s ease forwards;
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section {
            padding: 80px 0;
        }

        .section h2 {
            color: #f0c14b;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }

        .about p {
            max-width: 800px;
            margin: auto;
            color: #bbb;
            text-align: center;
        }

        .services .card,
        .projects .card {
            background: #1a1a1a;
            border: none;
            border-radius: 10px;
            color: #eee;
            transition: 0.3s;
        }

        .services .card:hover,
        .projects .card:hover {
            transform: translateY(-10px);
            background: #222;
        }

        .skills .badge {
            background-color: #f0c14b;
            color: #111;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 50px;
            margin: 5px;
            font-weight: 500;
        }

        footer {
            text-align: center;
            color: #888;
            padding: 40px 0;
            background: #000;
        }

        .btn-custom {
            background-color: #f0c14b;
            color: #111;
            font-weight: 600;
            border: none;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="text-center">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Hero -->
    <section class="hero" id="home">
        <h1>Hello, I’m Aqsa Malik</h1>
        <p>Creative Full Stack Developer — Crafting clean, modern, and high-performing web experiences.</p>
        <a href="#contact" class="btn btn-custom mt-3 px-4 py-2">Get In Touch</a>
    </section>

    <!-- About -->
    <section id="about" class="section about">
        <h2>About Me</h2>
        <p>I’m a web developer with expertise in Laravel, JavaScript, and modern UI design. My focus is creating seamless user experiences that combine clean design with solid functionality. I love turning concepts into interactive realities.</p>
    </section>

    <!-- Services -->
    <section id="services" class="section services bg-dark">
        <h2>What I Offer</h2>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h5>Web Development</h5>
                        <p>Building scalable and responsive web applications using modern technologies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h5>API & Backend</h5>
                        <p>Robust backend systems and RESTful APIs for secure data handling and integration.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 text-center">
                        <h5>UI/UX Design</h5>
                        <p>Designing aesthetic and intuitive interfaces for better user engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section skills">
        <h2>My Skills</h2>
        <div class="text-center">
            <span class="badge">HTML</span>
            <span class="badge">CSS</span>
            <span class="badge">Bootstrap</span>
            <span class="badge">Laravel</span>
            <span class="badge">MySQL</span>
            <span class="badge">Vue.js</span>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section projects bg-dark">
        <h2>Featured Projects</h2>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card p-4">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600" class="img-fluid" alt="Project 1">
                        <h5>Resume Builder API</h5>
                        <p>Laravel-based resume generator allowing users to create, edit, and export CVs as PDFs.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4">
                        <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?w=900" alt="" class="img-fluid">

                        <h5>Real-Time Chat App</h5>
                        <p>A full-stack real-time chat application using Laravel Reverb, Events, and Livewire.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section">
        <h2>Contact Me</h2>
        <div class="container">
            <form class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control bg-dark text-light" placeholder="Your Name">
                </div>
                <div class="col-md-5">
                    <input type="email" class="form-control bg-dark text-light" placeholder="Your Email">
                </div>
                <div class="col-md-10">
                    <textarea class="form-control bg-dark text-light" rows="4" placeholder="Your Message"></textarea>
                </div>
                <div class="col-md-10 text-center">
                    <button class="btn btn-custom px-5 py-2">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Aqsa Malik — Designed with passion 💛</p>
    </footer>

</body>

</html>