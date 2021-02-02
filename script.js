var cards__btn = document.getElementsByClassName("cards__btn");
var form__container_flex = document.getElementsByClassName("form__container_flex");
form__container_flex = form__container_flex[0];
var modal = document.getElementsByClassName("modal");
modal = modal[0];

for (let i = 0; i < cards__btn.length; i++) {
    cards__btn[i].addEventListener('click', () => {
        form__container_flex.classList.remove("hidden");
        modal.classList.remove("hidden");
    });
}

modal.addEventListener('click', () => {
    form__container_flex.classList.add("hidden");
    modal.classList.add("hidden");

});
