document.addEventListener("DOMContentLoaded", function () {
    const toTopButton = document.getElementById("toTopButton");

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    });

    toTopButton.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

var mySwiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        576: {
            slidesPerView: 1,
        },
        990: {
            slidesPerView: 2,
        },
        // Tambahkan breakpoints sesuai kebutuhan
    },
    autoplay: {
        delay: 3000, // Ubah nilai ini sesuai keinginan (dalam milidetik)
    },
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        990: {
            slidesPerView: 3,
        },

        // Tambahkan breakpoints sesuai kebutuhan
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000, // Ubah nilai ini sesuai keinginan (dalam milidetik)
    },
});

document.addEventListener("DOMContentLoaded", function () {
    const copyButton = document.getElementById("copyButton");
    const copyLink = document.getElementById("copyLink");

    copyLink.addEventListener("click", function (event) {
        event.preventDefault(); // Menghentikan aksi default (scroll ke atas)

        const urlToCopy = window.location.href;

        const tempInput = document.createElement("input");
        tempInput.value = urlToCopy;
        document.body.appendChild(tempInput);

        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        copyButton.style.display = "inline-block";
        setTimeout(function () {
            copyButton.style.display = "none";
        }, 2000);
    });
});
