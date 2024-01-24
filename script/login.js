setTimeout(function () {
    document.querySelector('a').style.display = 'none';
}, 10);

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const closeBtn = document.querySelector(".closebtn")

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> { 
    wrapper.classList.remove('active');
});

iconClose.addEventListener('click', ()=>{
    window.location.href = "homepage.php";
});

