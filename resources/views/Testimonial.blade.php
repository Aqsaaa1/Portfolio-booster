@include('partials.header')



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

<hr style="border: none; height: 2px; background: linear-gradient(to right, transparent, #666, transparent); margin: 40px 0;">



@include('partials.footer')