const moveDownBtn = document.querySelector(".btn-move__down");

const section = document.querySelector(".main__des-heading");

const checkBox = document.querySelector("#check");

console.log(checkBox);
checkBox.addEventListener("click", function (e) {
    if (checkBox.checked) {
        return document.body.classList.add("overflow");
    }
    document.body.classList.remove("overflow");
    // console.log();
});

let click = 0;
moveDownBtn.addEventListener("click", function (e) {
    e.preventDefault();

    if (click === 0) {
        section.scrollIntoView({
            behavior: "smooth",
            block: "center",
            inline: "nearest",
        });
        click++;
        return;
    }

    if (click > 0) {
        console.log(click);
        section.scrollIntoView({
            behavior: "smooth",
        });
        click = 0;
        return;
    }
});

// // lazy loading
// const loadingSections = document.querySelectorAll(".section__animate");

// let timer;

// // funtion lazyTimer = se

// const loadSection = function (entries) {
//   const [entry] = entries;
//   console.log(entry.isIntersecting);

//   // isIntersecting true
//   if (entry.isIntersecting) {
//     // console.log(entry);
//     clearTimeout(timer);
//     timer = setTimeout(
//       () => {
//         entry.target.classList.remove("lazy-section");
//         console.log(entry);
//       },
//       5000,
//       entry
//     );
//     return;
//     // entry.target.classList.remove("lazy-section");
//   }
//   entry.target.classList.add("lazy-section");
// };

// const sectionObserver = new IntersectionObserver(loadSection, {
//   root: null,
//   threshold: 0,
//   rootMargin: "0px",
// });

// loadingSections.forEach((loading) => {
//   sectionObserver.observe(loading);
// });
