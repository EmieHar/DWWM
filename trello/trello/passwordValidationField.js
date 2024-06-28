
let validationBox = document.querySelector(".validation-box");
let passwordField = document.getElementById("password-field");
let checklist = document.querySelector(".checklist").getElementsByTagName("li");
let lowerCout = 0,
    upperCout = 0,
    numberCout = 0;
let icon = document.querySelector(".icon");
let show = true;

// show and hide password
icon.addEventListener("click", () => {
    if(show) {
        passwordField.type = "text";
        show = false;
    } else {
        passwordField.type = "password";
        show = true;
    }icon.querySelector(".show").classList("hide");
    icon.querySelector(".slash").classList("hide");
});

