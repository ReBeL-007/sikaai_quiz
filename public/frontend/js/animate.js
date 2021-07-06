const sectionDescrition = document.querySelector(".section__description");

const allCards = document.querySelectorAll(".section__description-card");

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

// active tab
const navContainer = document.querySelector(".nav__");
