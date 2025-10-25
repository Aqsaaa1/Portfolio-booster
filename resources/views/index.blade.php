@include('partials.header')


<!--  Hero Section with Gradient Motion -->
<section class="hero" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>
                    Build Your <span>Portfolio</span> in Minutes
                </h1>
                <p>
                    Build a polished, standout portfolio in minutes. Choose a modern template, customize each section with your personal details, and instantly share your portfolio online via a secure link sent to your email.
                </p>


                <a href="{{ route('templates') }}" class="btn btn-primary">Start Building</a>
            </div>

            <div class="col-md-6 text-center">
                <img src="https://cdn.dribbble.com/users/1162077/screenshots/3848914/programmer.gif" alt="Portfolio Builder Demo" class="hero-img">
            </div>
        </div>
    </div>
</section>




<!--  Creative Image Wall -->
<section class="creative-wall">
    <div class="image-grid">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1532614338840-ab30cf10ed36?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1473187983305-f615310e7daa?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1000" alt="">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1000" alt="">


    </div>
</section>


<!--  Smooth Creative About Section -->
<section class="about-halo-section">
    <div class="container text-center position-relative">

        <!-- Floating Feature Icons -->
        <div class="floating-icon icon1"><i class="bi bi-brush"></i></div>
        <div class="floating-icon icon2"><i class="bi bi-lightning"></i></div>
        <div class="floating-icon icon3"><i class="bi bi-palette"></i></div>
        <div class="floating-icon icon4"><i class="bi bi-cloud-arrow-down"></i></div>
        <div class="floating-icon icon5"><i class="bi bi-magic"></i></div>


        <!-- About Content -->
        <div class="about-content">
            <h2>About <span>MyPortfolioX</span></h2>
            <p>
                We blend creativity and technology to make portfolio building a delightful experience.
                Effortless customization, glowing aesthetics, and seamless performance — made for creators like you.
            </p>
            <a href="{{ route('about') }}" class="btn btn-primary mt-3">Explore More</a>
        </div>
    </div>
</section>



<!-- Templates Section (Dark Aesthetic)-->
<section class="templates-section-dark py-5" id="templates">
    <canvas id="circleCanvas"></canvas>

    <div class="container position-relative text-center">
        <div class="section-header mb-5">
            <h2>Explore Stunning Templates</h2>
            <p>Pick a design that fits your personality.</p>
        </div>

        @php
        $templates = [
        ['id' => 1, 'image' => asset('images/templates/template1.png')],
        ['id' => 2, 'image' => asset('images/templates/template2.png')],
        ['id' => 3, 'image' => asset('images/templates/template3.png')],

        ];
        @endphp


        <div class="row g-4 justify-content-center">
            @foreach($templates as $template)
            <div class="col-lg-4 col-md-6">
                <div class="template-card">
                    <img src="{{ $template['image'] }}" alt="Template {{ $template['id'] }}" style="width: 100%; height: 250px; object-fit: contain; ">
                    <div class="overlay d-flex justify-content-center gap-2">
                        <a class="btn btn-light" href="{{ route('templates') }}">Preview</a>
                        <a class="btn btn-primary" href="{{ route('templates') }}">Select</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('templates') }}" class="btn btn-outline-light see-all-btn">See All Templates</a>
        </div>
    </div>
</section>


<!--how it work-->

<section id="how-it-works" class="how-it-works py-5">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="container text-center">
        <h2 class="section-title mb-5">How It Works</h2>

        <div class="timeline">
            <!-- Step 1 -->
            <div class="timeline-step left">
                <div class="step-content">
                    <div class="step-icon">
                        <i class="bi bi-grid"></i>
                    </div>
                    <div class="step-card">
                        <h5>Choose Your Template</h5>
                        <p>Pick a sleek, modern design that reflects your personality and career goals.</p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-step right">
                <div class="step-content">
                    <div class="step-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <div class="step-card">
                        <h5>Customize Your Content</h5>
                        <p>Fill in your details — About, Skills, Projects, and Experience — with easy editing tools.</p>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-step left">
                <div class="step-content">
                    <div class="step-icon">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>
                    <div class="step-card">
                        <h5>Boost Your Portfolio</h5>
                        <p>Add case studies, visuals, and achievements to make your resume stand out to recruiters.</p>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-step right">
                <div class="step-content">
                    <div class="step-icon">
                        <i class="bi bi-envelope-paper"></i> <!-- changed icon to email -->
                    </div>
                    <div class="step-card">
                        <h5>Share Your Portfolio</h5>
                        <p>Send a link of your portfolio directly to your email and view it online instantly without downloading.</p>
                    </div>
                </div>
            </div>


        </div>
</section>


<!--  Testimonials Section -->
<section class="testimonials" id="testimonials">
    <svg class="section-divider" viewBox="0 0 1440 150" preserveAspectRatio="none">
        <path fill="#f8f9fa" d="M0,0 C480,120 960,0 1440,120 L1440,0 L0,0 Z"></path>
    </svg>

    <div class="container text-center position-relative">
        <h2 class="section-title mb-5">What Our Users Say</h2>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>“This builder made creating my portfolio super easy — the templates are stunning!”</p>
                    <div class="user-info">
                        <img src="https://i.pravatar.cc/80?img=1" alt="user">
                        <div>
                            <h6>joe Stone</h6>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>“The templates are stunning and easy to customize. My resume now looks truly professional.”</p>

                    <div class="user-info">
                        <img src="https://i.pravatar.cc/80?img=2" alt="user">
                        <div>
                            <h6>James Lee</h6>
                            <span>Laravel Developer</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>“I love the new email share feature! I can instantly view my portfolio online and share it with clients.”</p>
                    <div class="user-info">
                        <img src="https://i.pravatar.cc/80?img=3" alt="user">
                        <div>
                            <h6>Saphire Khan</h6>
                            <span>UI/UX Student</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="faq-floating">
        <span>?</span>
        <span>?</span>
        <span>?</span>
        <span>?</span>
    </div>

    <div class="container">
        <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <i class="bi bi-question-circle"></i> What is the Portfolio Builder?
                    <span class="faq-toggle"><i class="bi bi-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>
                        The Portfolio Builder helps you create a professional online portfolio with modern templates — no coding skills required.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <i class="bi bi-pencil-square"></i> Can I customize my templates?
                    <span class="faq-toggle"><i class="bi bi-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>
                        No! You can't change layouts, colors, and sections .
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <i class="bi bi-envelope"></i> Can I share my portfolio online?
                    <span class="faq-toggle"><i class="bi bi-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>
                        Yes! You can instantly send a link to your portfolio to your email and view it online, making it easy to share with clients or friends.
                    </p>
                </div>
            </div>


            <div class="faq-item">
                <div class="faq-question">
                    <i class="bi bi-shield-lock"></i> Is my data secure?
                    <span class="faq-toggle"><i class="bi bi-chevron-down"></i></span>
                </div>
                <div class="faq-answer">
                    <p>
                        We use encryption and secure authentication to make sure your information stays private and safe.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
        item.querySelector(".faq-question").addEventListener("click", () => {
            item.classList.toggle("active");
            faqItems.forEach(i => {
                if (i !== item) i.classList.remove("active");
            });
        });
    });
</script>

@include('partials.footer')