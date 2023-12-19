// Navbar Toggler
$(".mobileMenuButton").each(function (_, navToggler) {
    var target = $(navToggler).data("target");
    $(navToggler).on("click", function () {
        $(target).animate({
            height: "toggle",
        });
    });
});

// FAQ
var buttonFaq = document.querySelectorAll(".accordion");
for (let index = 0; index < buttonFaq.length; index++) {
    buttonFaq[index].addEventListener("click", (e) => {
        e.preventDefault();
        var idButton = e.currentTarget.getAttribute("id");
        var faqContent = document.querySelector(`#${idButton}-content`);
        // Toggle faq content
        faqContent.classList.toggle("hidden");
        // Rotate arrow
        document
            .querySelector(`#${idButton} img`)
            .classList.toggle("rotate-180");
    });
}

// Toggle Dropdown
function toggleDropdown(el) {
    document.getElementById("userDropdownMenu").classList.toggle("hidden");
}

// Upload user photo
$("#btnUploadPhoto").on("click", () => {
    $("input#photo").trigger("click");
});

// Delete photo preview
$("#btnDeletePhoto").on("click", () => {
    $("#imageSrc").attr("src", "../assets/svgs/ic-default-photo.svg");
    $("#btnDeletePhoto").toggleClass("hidden");
    $("#btnUploadPhoto").toggleClass("hidden");
});

// Show photo preview
$("#photo").change(function (e) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imageSrc").attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    }

    $("#btnDeletePhoto").toggleClass("hidden");
    $("#btnUploadPhoto").toggleClass("hidden");
});
document.getElementById("default-carousel").carousel();
const items = [
    {
        position: 0,
        el: document.getElementById("carousel-item-1"),
    },
    {
        position: 1,
        el: document.getElementById("carousel-item-2"),
    },
    {
        position: 2,
        el: document.getElementById("carousel-item-3"),
    },
    {
        position: 3,
        el: document.getElementById("carousel-item-4"),
    },
];

// options with default values
const options = {
    defaultPosition: 1,
    interval: 3000,

    indicators: {
        activeClasses: "bg-white dark:bg-gray-800",
        inactiveClasses:
            "bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800",
        items: [
            {
                position: 0,
                el: document.getElementById("carousel-indicator-1"),
            },
            {
                position: 1,
                el: document.getElementById("carousel-indicator-2"),
            },
            {
                position: 2,
                el: document.getElementById("carousel-indicator-3"),
            },
            {
                position: 3,
                el: document.getElementById("carousel-indicator-4"),
            },
        ],
    },

    // callback functions
    onNext: () => {
        console.log("next slider item is shown");
    },
    onPrev: () => {
        console.log("previous slider item is shown");
    },
    onChange: () => {
        console.log("new slider item has been shown");
    },
};

// instance options object
const instanceOptions = {
    id: "carousel-example",
    override: true,
};
