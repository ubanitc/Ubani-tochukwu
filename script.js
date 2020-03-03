const green = document.querySelector(".green");
const bend = document.querySelector(".bend");
const bback = document.querySelector(".bback");
const clickme = document.querySelector(".clickme");
const blue = document.querySelector(".blue");
const add = document.querySelector("#just");
const remove = document.querySelector(".back");
const bbback = document.querySelector(".bbback");
const bbbback = document.querySelector(".bbbback");
const justice = document.querySelector(".justice");
const god = document.querySelector(".god");
const payment = document.querySelector(".payment");
const paymentback = document.querySelector(".paymentback");
const padi = document.querySelector(".padi");

add.addEventListener("click", () => {
  green.classList.add("display");
  blue.classList.remove("display");
});
bback.addEventListener("click", () => {
  green.classList.remove("display");
  blue.classList.add("display");
});
remove.addEventListener("click", () => {
  bend.classList.remove("display");
  blue.classList.add("display");
});
bbback.addEventListener("click", () => {
  bend.classList.add("display");
  blue.classList.remove("display");
});
justice.addEventListener("click", () => {
  bend.classList.add("display");
  god.classList.remove("display");
});
bbbback.addEventListener("click", () => {
  bend.classList.remove("display");
  god.classList.add("display");
});
clickme.addEventListener("click", () => {
  blue.classList.add("display");
  payment.classList.remove("display");
});
paymentback.addEventListener("click", () => {
  blue.classList.remove("display");
  payment.classList.add("display");
});
