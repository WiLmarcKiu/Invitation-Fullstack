//? NAVBAR EFFECT ON SCROLL
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

//? RESPONSIVE NAVIGATION MENU TOOGGLE
const menuBtn = document.querySelector(".nav-menu-btn");
const closeBtn = document.querySelector(".nav-close-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
  navigation.classList.add("active");
});

closeBtn.addEventListener("click", () => {
  navigation.classList.remove("active");
});

//? SCROLL TOP BUTTON
const scrollTopBtn = document.querySelector(".scrollToTop-btn");
window.addEventListener("scroll", function () {
  scrollTopBtn.classList.toggle("active", window.scrollY > 100);
});

scrollTopBtn.addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

//? EFEK KETIK
// var typingEffect = new Typed(".efek-ketik", {
//   strings: ["The Wedding of"],
//   loop: true,
//   typeSpeed: 180,
//   backSpeed: 140,
//   backDelay: 1000,
// });
