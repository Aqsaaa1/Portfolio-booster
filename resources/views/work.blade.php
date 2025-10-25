@include('partials.header')







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

    </div>
</section>


@include('partials.footer')