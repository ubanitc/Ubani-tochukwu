const green = document.querySelector(".green");
const blue = document.querySelector(".blue");
const add = document.querySelector("#front");
const remove = document.querySelector("#back");

add.addEventListener("click", () => {
  green.classList.add("display");
  blue.classList.remove("display");
});
remove.addEventListener("click", () => {
  green.classList.remove("display");
  blue.classList.add("display");
});
