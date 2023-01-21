// Toggle Class Active
const navbarNav = document.querySelector(".navbar-nav");

// Click Menu
document.querySelector("#navMenu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Click Outside Menu and Nav
const outsideMenuNav = document.querySelector("#navMenu");

document.addEventListener("click", function (e) {
  if (!outsideMenuNav.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
