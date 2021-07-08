const sectionDescrition = document.querySelector(".section__description");

const allCards = document.querySelectorAll(".section__description-card");

const navContainer = document.querySelector(".nav__list");

const allLinks = document.querySelector(".nav__list-link");

// for (var i = 0; i < document.links.length; i++) {
//     if (document.links[i].href == document.URL) {
//         document.links[i].classList.add("nav__list-link-active");
//     }
// }
//     </script>

// navContainer.addEventListener("click", function (e) {
//     e.preventDefault();
//     console.log(e.target);
//     const activeElement = e.target.closest(".nav__list-link");

//     if (!activeElement) return;

//     allLinks.forEach((link) => link.classList.remove("nav__list-link-active"));

//     activeElement.classList.add("nav__list-link-active");
//     // forward to the page
// });

// allLinks.forEach((link) => {
//     link.addEventListener("click", function () {
//         allLinks.forEach((link) => {
//             link.classList.remove("nav__list-link-active");
//             this.classList.add("nav__list-link-active");
//         });
//     });
// });
// jQuery(function ($) {
//     var path = window.location.href;
//     console.log(path);
//     // because the 'href' property of the DOM element is the absolute path
//     $(".nav__list-link").each(function () {
//         if (this.href === path) {
//             $(this).addClass(".nav__list-link-active");
//         }
//     });
// });

const revealCard = function (entries, observer) {
    const [entry] = entries;

    console.log(entries);
    if (!entry.isIntersecting) {
        allCards.forEach((card) => card.classList.add("section__hidden"));
    } else {
        allCards.forEach((card) => card.classList.remove("section__hidden"));
    }

    // observer.unobserve(entry.target);
};

const observer = new IntersectionObserver(revealCard, {
    root: null,
    threshold: 0.05,
});

observer.observe(sectionDescrition);
