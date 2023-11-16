const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onclick = (e) => {
    e.preventDefault(); //preventing form from submitting.
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
}