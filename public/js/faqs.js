document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".px-6.py-4.border");

    faqItems.forEach((item) => {
        const question = item.querySelector(".flex.items-center");
        const answer = item.querySelector("div.hidden");
        const icon = item.querySelector("img");

        question.addEventListener("click", function () {
            // Toggle jawaban
            answer.classList.toggle("hidden");

            // Putar ikon (chevron)
            icon.classList.toggle("rotate-180");
        });
    });
});