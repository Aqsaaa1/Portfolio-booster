




    document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.stopPropagation();
            }
        });
    });



    const images = document.querySelectorAll('.image-grid img');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    images.forEach(img => observer.observe(img));

    const canvas = document.getElementById("circleCanvas");
    const ctx = canvas.getContext("2d");
    let circles = [];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = document.querySelector('.templates-section-dark').offsetHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    for (let i = 0; i < 20; i++) {
        circles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            r: Math.random() * 25 + 8,
            dx: (Math.random() - 0.5) * 0.3,
            dy: (Math.random() - 0.5) * 0.3,
            color: `rgba(${120 + Math.random()*60},${170 + Math.random()*60},255,${Math.random() * 0.15})`
        });
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        circles.forEach(c => {
            ctx.beginPath();
            ctx.arc(c.x, c.y, c.r, 0, Math.PI * 2);
            ctx.fillStyle = c.color;
            ctx.fill();

            c.x += c.dx;
            c.y += c.dy;

            if (c.x < 0 || c.x > canvas.width) c.dx *= -1;
            if (c.y < 0 || c.y > canvas.height) c.dy *= -1;
        });
        requestAnimationFrame(animate);
    }
    animate();

    // Animate steps on scroll
    const steps = document.querySelectorAll('.timeline-step');
    const onScroll = () => {
        const triggerBottom = window.innerHeight * 0.8;
        steps.forEach(step => {
            const rect = step.getBoundingClientRect();
            if (rect.top < triggerBottom) step.classList.add('in-view');
        });
    };
    window.addEventListener('scroll', onScroll);
    onScroll();

    document.querySelectorAll(".step-card").forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty("--x", `${x}px`);
            card.style.setProperty("--y", `${y}px`);
        });
    });

   document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {
      const isActive = item.classList.contains("active");

      // Close all FAQs
      faqItems.forEach(i => i.classList.remove("active"));

      // Reopen the clicked one (only if it wasn’t already open)
      if (!isActive) {
        item.classList.add("active");
      }
    });
  });
});