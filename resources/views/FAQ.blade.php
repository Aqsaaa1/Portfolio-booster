@include('partials.header')


<script src="{{ asset('js/main.js') }}"></script>



<!--  FAQ Section-->
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
                        No! You can't change layouts, colors, and sections.
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