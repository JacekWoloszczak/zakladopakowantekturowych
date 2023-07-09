const button = document.querySelector(".cookie-btn");
const divCookie = document.querySelector(".cookie");

const searchCookie = () => {
  const eatenCookie = localStorage.getItem("cookie");
  if (eatenCookie) {
    divCookie.classList.add("hide");
  }
};
const handledivCookie = () => {
  localStorage.setItem("cookie", "true");
  divCookie.classList.add("hide");
};

button.addEventListener("click", handledivCookie);
searchCookie();
