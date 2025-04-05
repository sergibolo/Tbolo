document.addEventListener('DOMContentLoaded', function () {
  const menuBtn = document.getElementById('hamburger-icon');
  const menu = document.getElementById('navbar-menu');

  if (menuBtn && menu) {
    menuBtn.addEventListener('click', function () {
      menu.classList.toggle('show');
    });
  } else {
    console.error('No se encontró el icono de hamburguesa o el menú');
  }
});