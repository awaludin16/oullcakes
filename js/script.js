// hamburger toggle
const hamburger = document.querySelector("button#hamburger");
const navBar = document.querySelector("nav#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navBar.classList.toggle("active");
});

// klik di luar side navigasi bar
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navBar.contains(e.target)) {
    navBar.classList.remove("active");
    hamburger.classList.remove("hamburger-active");
  }
});
