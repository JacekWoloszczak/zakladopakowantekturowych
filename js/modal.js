const button = document.querySelector("#cookie-btn");
const divCookie = document.querySelector("#cookie");
const divHide = document.querySelector("#is-hide");
button.addEventListener("click", () => {
  divCookie.remove();
});
