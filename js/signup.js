const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function validate() {
    'use strict';
    // Get references to the form elements:
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    if (email.value == "test@gmail.com" && password.value == "1234") {
        window.open('homepage.html',"","",false);
       
    } 
    else 
    return false;
}





