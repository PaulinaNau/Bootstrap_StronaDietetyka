const hamArea = document.querySelector(".nav-wrapper");

const hamburger = () => {
  const nav = document.querySelector(".nav-wrapper");
  const hamContainer = document.querySelector(".hamburger-container");

  nav.classList.toggle("nav-wrapper-open");
  hamContainer.classList.toggle("active");
};

hamArea.addEventListener("click", hamburger);
