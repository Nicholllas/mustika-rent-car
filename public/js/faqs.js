document.addEventListener("DOMContentLoaded", function () {
    const faqCards = document.querySelectorAll("[data-faq-card]");

    faqCards.forEach((card) => {
        const toggle = card.querySelector("[data-faq-toggle]");
        const content = card.querySelector("[data-faq-content]");

        toggle.addEventListener("click", () => {
            // Close all other cards
            faqCards.forEach((otherCard) => {
                if (otherCard !== card) {
                    otherCard.classList.remove("bg-blue-50", "border-blue-400");
                    otherCard
                        .querySelector("[data-faq-content]")
                        .classList.add("hidden");
                    otherCard
                        .querySelector("svg")
                        .classList.remove("rotate-180");
                }
            });

            // Toggle current card
            card.classList.toggle("bg-blue-50");
            card.classList.toggle("border-blue-400");
            content.classList.toggle("hidden");
            toggle.querySelector("svg").classList.toggle("rotate-180");
        });
    });
});
