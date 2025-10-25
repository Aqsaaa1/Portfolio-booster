<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqsa Malik — Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            scroll-behavior: smooth;
        }

        /* NAVBAR */
        nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        /* HERO */
        .hero {
            background: linear-gradient(120deg, #4e54c8, #8f94fb);
            color: white;
            text-align: center;
            padding: 120px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            bottom: -60px;
            left: 0;
            width: 100%;
            height: 120px;
            background: white;
            border-radius: 100% 100% 0 0;
        }

        .hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        /* SECTIONS */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            color: #333;
        }

        .section-title::after {
            content: "";
            width: 80px;
            height: 4px;
            background: #0d6efd;
            display: block;
            margin: 10px auto 0;
            border-radius: 10px;
        }

        /* ABOUT */
        .about-img img {
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        /* SERVICES */
        .service-card {
            background: white;
            border: none;
            text-align: center;
            padding: 40px 20px;
            border-radius: 15px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            background: linear-gradient(120deg, #8f94fb, #4e54c8);
            color: white;
        }

        .service-card i {
            font-size: 40px;
            color: #4e54c8;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .service-card:hover i {
            color: white;
        }

        /* SKILLS */
        .skill {
            margin-bottom: 20px;
        }

        .skill-bar {
            background: #e9ecef;
            height: 10px;
            border-radius: 20px;
            overflow: hidden;
        }

        .skill-fill {
            height: 10px;
            border-radius: 20px;
            background: linear-gradient(120deg, #4e54c8, #8f94fb);
        }

        /* PROJECTS */
        .project-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .project-card:hover {
            transform: scale(1.05);
        }


        /* CONTACT */
        .contact-section {
            background: linear-gradient(120deg, #8f94fb, #4e54c8);
            color: white;
        }

        .contact-section input,
        .contact-section textarea {
            border: none;
            border-radius: 10px;
            padding: 12px;
        }

        .contact-section button {
            background: white;
            color: #4e54c8;
            font-weight: 600;
            border-radius: 10px;
            padding: 12px 30px;
            transition: 0.3s;
        }

        .contact-section button:hover {
            background: #f8f9fa;
        }

        footer {
            background: #111;
            color: #bbb;
            padding: 30px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Aqsa Malik</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navMenu" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?w=500" alt="Profile">
        <h1 data-aos="fade-up">Aqsa Malik</h1>
        <p data-aos="fade-up" data-aos-delay="100">Full Stack Laravel Developer | UI Designer | API Specialist</p>
        <a href="#contact" class="btn btn-light mt-3" data-aos="fade-up" data-aos-delay="200">Let's Talk</a>
    </section>

    <!-- ABOUT -->
    <section id="about" class="container">
        <h2 class="section-title">About Me</h2>
        <div class="row align-items-center">
            <div class="col-md-5 about-img" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?w=500" alt="About" class="img-fluid">
            </div>
            <div class="col-md-7" data-aos="fade-left">
                <p>
                    Hi! I’m <strong>Aqsa Malik</strong>, a passionate Laravel developer who loves to turn creative ideas into functional, elegant web applications.
                    My goal is to build solutions that make people's lives easier and businesses more efficient.
                </p>
                <ul>
                    <li><strong>Email:</strong> aqsamalik@example.com</li>
                    <li><strong>Location:</strong> Pakistan</li>
                    <li><strong>Experience:</strong> 2+ Years in Full Stack Development</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="bg-light">
        <div class="container">
            <h2 class="section-title">Services</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service-card">
                        <i class="fa-solid fa-laptop-code"></i>
                        <h5>Web Development</h5>
                        <p>Building secure, scalable, and maintainable web applications with Laravel.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-card">
                        <i class="fa-solid fa-layer-group"></i>
                        <h5>API Design</h5>
                        <p>Creating clean, RESTful APIs for your frontend or mobile integrations.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-card">
                        <i class="fa-solid fa-palette"></i>
                        <h5>UI/UX Design</h5>
                        <p>Designing modern and user-friendly interfaces that delight users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills">
        <div class="container">
            <h2 class="section-title">Skills & Tech Stack</h2>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="skill">
                        <h6>Laravel</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h6>MySQL</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h6>Bootstrap</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 95%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="skill">
                        <h6>JavaScript</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h6>Vue.js</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <h6>REST APIs</h6>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="bg-light">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800" class="img-fluid" alt="">
                        <div class="p-3">
                            <h5>Resume Builder</h5>
                            <p>Build and download your professional resume dynamically with APIs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?w=800" class="img-fluid" alt="">
                        <div class="p-3">
                            <h5>Portfolio Website</h5>
                            <p>A modern portfolio showcasing all my creative and technical skills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600" class="img-fluid" alt="">
                        <div class="p-3">
                            <h5>Real-Time Chat App</h5>
                            <p>Secure chat app with Laravel Reverb and private channel authentication.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <form class="row g-3 mx-auto" style="max-width: 600px;">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary px-5">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <p>© 2025 Aqsa Malik — All Rights Reserved</p>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>