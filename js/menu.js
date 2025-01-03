const menu = document.getElementById("hamburger");
const navMenu = document.getElementById("Menu_nav");

menu.addEventListener("click", () => {
  // Alternar la clase 'show' para mostrar u ocultar el menú
  navMenu.classList.toggle("show");
});