let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let loginForm = document.querySelector('.header .login-form');
let contactInfo = document.querySelector('.contact-info');
let infoBtn = document.querySelector('#info-btn');
let closeContactBtn = document.querySelector('#close-contact-info');

document.querySelector('#menu-btn').onclick = () =>{
navbar.classList.toggle('active');
};

document.querySelector('#pesquisar-btn').onclick = () =>{
searchForm.classList.toggle('active');
};

document.querySelector('#login-btn').onclick = () =>{
  if (loginForm) {
    loginForm.classList.toggle('active');
  } else {
    window.location.href = 'login.php';
  }
};

if (infoBtn && contactInfo) {
  infoBtn.onclick = () => {
    contactInfo.classList.toggle('active');
  };
}

if (closeContactBtn && contactInfo) {
  closeContactBtn.onclick = () => {
    contactInfo.classList.remove('active');
  };
}

window.onscroll = () =>{
  navbar && navbar.classList.remove('active');
  searchForm && searchForm.classList.remove('active');
  if (loginForm) loginForm.classList.remove('active');
  if (contactInfo) contactInfo.classList.remove('active');
};

