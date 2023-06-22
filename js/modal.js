const button = document.querySelector("#cookie-btn");
const divCookie = document.querySelector("#cookie");
button.addEventListener("click", () => {
  divCookie.remove();
});
