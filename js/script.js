(() => {
  const menuOverlay = document.querySelector(".header__menu-mobile");
  const closeMenuButton = document.querySelector(".header__exit-btn");
  const openMenuBtn = document.querySelector(".header__mobile-btn");
  openMenuBtn.addEventListener("click", (e) => {
    menuOverlay.classList.remove("d-none");
  });
  closeMenuButton.addEventListener("click", (e) => {
    menuOverlay.classList.add("d-none");
  });
})();

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 300;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
