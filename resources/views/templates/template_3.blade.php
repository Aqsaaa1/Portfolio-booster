<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Aqsa Malik — Dark Creative Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --bg: #0b0f1a;
            --panel: #0f1724;
            --muted: #9aa6bd;
            --accent: #1EA7FF;
            /* skyline-blue accent */
            --accent-2: rgba(30, 167, 255, 0.18);
            --glass: rgba(255, 255, 255, 0.03);
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: radial-gradient(1200px 600px at 10% 10%, rgba(30, 167, 255, 0.06), transparent),
                radial-gradient(800px 400px at 90% 90%, rgba(30, 167, 255, 0.03), transparent),
                var(--bg);
            color: #e6eef8;
            font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            scroll-behavior: smooth;
        }

        a {
            color: var(--accent);
            text-decoration: none;
        }

        a:hover {
            color: #00c0ff;
        }

        /* NAV */
        .navbar {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            padding: .6rem 1rem;
        }

        .navbar .nav-link {
            color: var(--muted);
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .navbar .nav-link:hover {
            color: var(--accent);
        }

        /* HERO - fullscreen with animated text */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 3rem 1rem;
        }

        .hero-card {
            width: 100%;
            max-width: 1100px;
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 2rem;
            align-items: center;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: 16px;
            padding: 36px;
            box-shadow: 0 10px 40px rgba(2, 6, 23, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.03);
        }

        /* left */
        .hero-left h1 {
            font-size: clamp(28px, 4vw, 42px);
            margin: 0 0 10px;
            line-height: 1.02;
            color: #fff;
            letter-spacing: -0.5px;
        }

        .hero-left .sub {
            color: var(--muted);
            margin-bottom: 18px;
            font-size: 1.05rem;
        }

        .typing {
            color: var(--accent);
            font-weight: 700;
        }

        .cta-group {
            margin-top: 20px;
            display: flex;
            gap: .8rem;
            flex-wrap: wrap;
        }

        .btn-accent {
            background: linear-gradient(90deg, var(--accent), #00cfff);
            color: #012029;
            border: none;
            font-weight: 700;
            padding: 10px 18px;
            border-radius: 10px;
            box-shadow: 0 8px 30px var(--accent-2);
            transition: transform .18s, box-shadow .18s;
        }

        .btn-accent:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 40px rgba(30, 167, 255, 0.28);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.06);
            color: var(--muted);
            padding: 10px 16px;
            border-radius: 10px;
            transition: all .18s;
        }

        .btn-outline:hover {
            color: var(--accent);
            border-color: rgba(30, 167, 255, 0.35);
        }

        .hero-stats {
            display: flex;
            gap: 18px;
            margin-top: 18px;
            color: var(--muted);
        }

        .stat {
            text-align: center;
        }

        .stat strong {
            display: block;
            font-size: 1.15rem;
            color: #fff;
        }

        /* right - profile card */
        .profile {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border-radius: 12px;
            padding: 18px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.03);
        }

        .profile img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.03);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.6);
            margin-bottom: 12px;
        }

        .profile h4 {
            margin: 8px 0 4px;
            color: #fff;
        }

        .profile p {
            color: var(--muted);
            margin-bottom: 12px;
            font-size: .95rem;
        }

        .socials {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .socials a {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.02);
            color: var(--muted);
            transition: all .18s;
        }

        .socials a:hover {
            transform: translateY(-6px);
            color: var(--accent);
            box-shadow: 0 8px 20px var(--accent-2);
        }

        /* Sections */
        section.content {
            padding: 80px 0;
        }

        .card-panel {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent);
            border-radius: 12px;
            padding: 18px;
            border: 1px solid rgba(255, 255, 255, 0.03);
            box-shadow: 0 8px 30px rgba(2, 6, 23, 0.45);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: center;
        }

        .about-grid img {
            width: 100%;
            border-radius: 12px;
            object-fit: cover;
        }

        /* skill chips */
        .skill-chip {
            display: inline-flex;
            gap: 10px;
            align-items: center;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.02);
            color: var(--muted);
            margin: 6px;
            border: 1px solid rgba(255, 255, 255, 0.02);
        }

        .skill-chip .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--accent);
            box-shadow: 0 6px 18px var(--accent-2);
        }

        /* projects grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .project {
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            background: #07101a;
            border: 1px solid rgba(255, 255, 255, 0.03);
        }

        .project img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .project .p-body {
            padding: 14px;
            color: var(--muted);
        }

        .project .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(30, 167, 255, 0.0), rgba(2, 6, 23, 0.6));
            opacity: 0;
            transition: opacity .25s;
            display: flex;
            align-items: flex-end;
            padding: 16px;
        }

        .project:hover .overlay {
            opacity: 1;
        }

        /* CONTACT */
        .contact-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            align-items: start;
        }

        .input-glass {
            background: var(--glass);
            border: 1px solid rgba(255, 255, 255, 0.04);
            color: #e7f3ff;
            padding: 12px;
            border-radius: 10px;
            width: 100%;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 28px 12px;
            color: var(--muted);
            border-top: 1px solid rgba(255, 255, 255, 0.02);
        }

        /* Responsive tweaks */
        @media (max-width: 992px) {
            .hero-card {
                grid-template-columns: 1fr;
                padding: 22px;
            }

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .contact-panel {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        /* small helper */
        .muted {
            color: var(--muted);
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Aqsa Malik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="hero-card container">
            <div class="hero-left">
                <div class="muted">Hello, my name is</div>
                <h1>Aqsa <span style="color:var(--accent)">Malik</span></h1>
                <div class="sub muted">I build fast, secure, and elegant web applications with Laravel & modern JS</div>

                <div style="font-size:1.05rem; margin-top:8px;">
                    <span class="typing">Full-stack Developer</span><span class="muted"> • </span><span class="muted">API & UX</span>
                </div>

                <div class="cta-group">
                    <a class="btn-accent" href="#contact"><i class="fa-solid fa-paper-plane me-2"></i>Hire Me</a>
                    <a class="btn-outline" href="#projects">View Work</a>
                    <a class="btn-outline" href="/resume.pdf" target="_blank">Download CV</a>
                </div>

                <div class="hero-stats">
                    <div class="stat"><strong>5+</strong><span class="muted">Projects</span></div>
                    <div class="stat"><strong>2yrs</strong><span class="muted">Experience</span></div>
                    <div class="stat"><strong>10+</strong><span class="muted">Clients</span></div>
                </div>
            </div>

            <div class="profile">
                <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?w=600" alt="Profile">
                <h4>Aqsa Malik</h4>
                <p>Full-Stack Laravel Developer</p>
                <div class="socials">
                    <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section id="about" class="content">
        <div class="container">
            <div class="card-panel about-grid">
                <div>
                    <h3>About Me</h3>
                    <p class="muted">I’m a Laravel-focused full-stack developer who focuses on clean architecture, maintainable code, and delightful UI. I enjoy solving problems and turning complex requirements into polished web applications.</p>

                    <div style="margin-top:14px;">
                        <span class="skill-chip"><span class="dot"></span> Backend</span>
                        <span class="skill-chip"><span class="dot"></span> Frontend</span>
                        <span class="skill-chip"><span class="dot"></span> API Design</span>
                        <span class="skill-chip"><span class="dot"></span> UX</span>
                    </div>

                    <div style="margin-top:18px">
                        <a class="btn-accent" href="#contact"><i class="fa-solid fa-envelope me-2"></i>Contact Me</a>
                        <a class="btn-outline ms-2" href="#projects">My Work</a>
                    </div>
                </div>

                <div>
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=900" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="content">
        <div class="container">
            <div class="card-panel">
                <h3>Skills & Tools</h3>
                <p class="muted">A selection of technologies I work with regularly.</p>
                <div style="margin-top:16px; display:flex; flex-wrap:wrap;">
                    <div class="skill-chip"><span class="dot"></span>Laravel</div>
                    <div class="skill-chip"><span class="dot"></span>PHP</div>
                    <div class="skill-chip"><span class="dot"></span>MySQL</div>
                    <div class="skill-chip"><span class="dot"></span>JavaScript</div>
                    <div class="skill-chip"><span class="dot"></span>Vue.js</div>
                    <div class="skill-chip"><span class="dot"></span>Bootstrap</div>
                    <div class="skill-chip"><span class="dot"></span>Git</div>
                    <div class="skill-chip"><span class="dot"></span>REST API</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="content">
        <div class="container">
            <h3 style="margin-bottom:16px">Selected Projects</h3>
            <div class="projects-grid">
                <div class="project">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900" alt="">
                    <div class="overlay">
                        <div style="color:white">
                            <h5 style="margin:0">Resume Builder</h5>
                            <p class="muted" style="margin:4px 0 0">Laravel API + Blade templates for PDF resumes.</p>
                        </div>
                    </div>
                    <div class="p-body">
                        <small class="muted">Web App</small>
                    </div>
                </div>

                <div class="project">
                    <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?w=900" alt="">
                    <div class="overlay">
                        <div style="color:white">
                            <h5 style="margin:0">Real-time Chat</h5>
                            <p class="muted" style="margin:4px 0 0">Broadcasting & Private Channels</p>
                        </div>
                    </div>
                    <div class="p-body"><small class="muted">Realtime</small></div>
                </div>

                <div class="project">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900" alt="">
                    <div class="overlay">
                        <div style="color:white">
                            <h5 style="margin:0">E-Commerce (Food)</h5>
                            <p class="muted" style="margin:4px 0 0">Restaurant ordering with Stripe</p>
                        </div>
                    </div>
                    <div class="p-body"><small class="muted">E-Commerce</small></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="content">
        <div class="container">
            <div class="card-panel contact-panel">
                <div>
                    <h3>Get in touch</h3>
                    <p class="muted">Interested in a project or collaboration? Send a message and I’ll get back within 48 hours.</p>

                    <div style="margin-top:16px;">
                        <div class="muted">Email</div>
                        <div><strong>aqsamalik@example.com</strong></div>
                        <div class="muted" style="margin-top:12px">Location</div>
                        <div><strong>Karachi, Pakistan</strong></div>
                    </div>
                </div>

                <div>
                    <form id="contactForm">
                        <div class="mb-3">
                            <input class="input-glass" type="text" id="name" placeholder="Your name" required>
                        </div>
                        <div class="mb-3">
                            <input class="input-glass" type="email" id="email" placeholder="Your email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="input-glass" id="message" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn-accent"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                        </div>
                        <div id="contactFeedback" style="margin-top:12px;"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        © 2025 Aqsa Malik · Built with Laravel & love
    </footer>

    <!-- Bootstrap + small scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // typing-like effect (simple)
        (function() {
            const phrases = ['Full-stack Developer', 'Laravel Enthusiast', 'API & UX', 'Problem Solver'];
            let idx = 0,
                pos = 0,
                forward = true,
                el = document.querySelector('.typing');
            if (!el) return;

            function tick() {
                const word = phrases[idx];
                if (forward) {
                    pos++;
                    if (pos >= word.length) {
                        forward = false;
                        setTimeout(tick, 900);
                        return;
                    }
                } else {
                    pos--;
                    if (pos <= 0) {
                        forward = true;
                        idx = (idx + 1) % phrases.length;
                        setTimeout(tick, 300);
                        return;
                    }
                }
                el.textContent = word.slice(0, pos) + (forward ? '|' : '');
                setTimeout(tick, forward ? 90 : 50);
            }
            tick();
        })();

        // contact form simple client-side behavior (demo)
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const fb = document.getElementById('contactFeedback');
            fb.textContent = 'Sending...';
            fb.style.color = 'var(--muted)';
            setTimeout(() => {
                fb.textContent = 'Message sent — thank you!';
                fb.style.color = 'var(--accent)';
                this.reset();
            }, 900);
        });
    </script>
</body>

</html>