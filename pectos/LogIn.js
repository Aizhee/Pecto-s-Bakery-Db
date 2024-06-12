document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('main-container');
    const signUpLink = document.getElementById('signUpLink');
    const signUpButton = document.getElementById('signUpBtn');
    const loginLink = document.getElementById('loginLink');
    const loginButton = document.getElementById('loginBtn');
    const loginBtnToggle = document.getElementById('loginBtnToggle');
    const signUpBtnToggle = document.getElementById('signUpBtnToggle');

    signUpLink.addEventListener('click', () => {
        container.classList.add("active");
    });

    signUpButton.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginLink.addEventListener('click', () => {
        container.classList.remove("active");
    });

    loginButton.addEventListener('click', () => {
        container.classList.remove("active");
    });

    loginBtnToggle.addEventListener('click', () => {
        container.classList.remove("active");
    });

    signUpBtnToggle.addEventListener('click', () => {
        container.classList.add("active");
    });
});
