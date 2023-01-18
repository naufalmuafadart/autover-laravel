const navbar = document.getElementById('navbar');

if (navbar.classList.contains('navbar-default')) {
  const btnLogin = document.getElementById('btnLogin');
  const btnDaftar = document.getElementById('btnSignUp');

  btnLogin.addEventListener('click', () => {
    window.location.href = "/login";
  });

  btnDaftar.addEventListener('click', () => {
    window.location.href = "/signup";
  });
} else if (navbar.classList.contains('navbar-user')) {
  const icMenuUser = document.getElementById('ic-menu-user');
  const navMenu = document.getElementById('nav-menu');

  icMenuUser.addEventListener('mouseenter', () => {
    navMenu.style.display = "inherit";
  });

  navbar.addEventListener('mouseleave', () => {
    console.log('mouse leave');
    navMenu.style.display = "none";
  });
}
