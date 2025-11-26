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
  // if the page has an inline login form (header), toggle it
  if (loginForm) {
    loginForm.classList.toggle('active');
  } else {
    // otherwise navigate to the standalone login page
    window.location.href = 'login.php';
  }
};

// Info button -> toggle contact panel (safe guards)
if (infoBtn && contactInfo) {
  infoBtn.onclick = () => {
    contactInfo.classList.toggle('active');
  };
}

// Close button for contact panel
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

