document.addEventListener("DOMContentLoaded", () => {
    const downloadBtn = document.getElementById("download-pdf");
    if (!downloadBtn) return;

    downloadBtn.addEventListener("click", async function() {
        const { jsPDF } = window.jspdf;
        const btnDiv = document.getElementById("download-btn-div");
        const portfolio = document.getElementById("portfolio-content");

        if (!portfolio) {
            alert("Portfolio content not found!");
            return;
        }

        // Hide download button section
        if (btnDiv) btnDiv.style.display = "none";

        // Wait for images and icons to load properly
        await new Promise(resolve => setTimeout(resolve, 700));

        // Temporarily make sure all content is visible
        portfolio.style.overflow = "visible";

        // Optional: ensure cards have solid backgrounds and visible borders
        document.querySelectorAll('.card, .portfolio-card').forEach(card => {
            card.style.background = "#ffffff";
            card.style.boxShadow = "0 4px 15px rgba(0, 0, 0, 0.15)";
            card.style.border = "1px solid #ddd";
            card.style.borderRadius = "12px";
        });

        // Capture high-resolution screenshot of the portfolio
        const canvas = await html2canvas(portfolio, {
            scale: 4, // high quality
            useCORS: true,
            backgroundColor: "#ffffff",
            windowWidth: document.documentElement.scrollWidth,
            windowHeight: document.documentElement.scrollHeight,
        });

        const imgData = canvas.toDataURL("image/png");
        const pdf = new jsPDF("p", "mm", "a4");
        const pdfWidth = pdf.internal.pageSize.getWidth();
        const pdfHeight = pdf.internal.pageSize.getHeight();

        const imgProps = pdf.getImageProperties(imgData);
        const imgHeight = (imgProps.height * pdfWidth) / imgProps.width;

        let heightLeft = imgHeight;
        let position = 0;

        // Add first page
        pdf.addImage(imgData, "PNG", 0, position, pdfWidth, imgHeight);
        heightLeft -= pdfHeight;

        // Add remaining pages if content is long
        while (heightLeft > 0) {
            position = heightLeft - imgHeight;
            pdf.addPage();
            pdf.addImage(imgData, "PNG", 0, position, pdfWidth, imgHeight);
            heightLeft -= pdfHeight;
        }

        // Save PDF
        pdf.save("MyPortfolio.pdf");

        // Restore button and overflow
        if (btnDiv) btnDiv.style.display = "block";
        portfolio.style.overflow = "";
    });
});
