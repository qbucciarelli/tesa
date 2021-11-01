const previousSiblings = (elem) => {
  while ((elem = elem.previousElementSibling)) {
    elem.classList.add("active");
  }
};

const nextSiblings = (elem) => {
  while ((elem = elem.nextElementSibling)) {
    elem.classList.remove("active");
  }
};

const currentImage = (elem) => {
  console.log(elem);
  console.log(document.querySelectorAll(".proceso-image"));
  [...document.querySelectorAll(".proceso-image")].map((item) => {
    item.classList.remove("active");
  });
  document.getElementById(elem).classList.add("active");
};

document.querySelectorAll(".proceso-listlitem").forEach(
  (elem) =>
    (elem.onclick = () => {
      elem.classList.add("active");
      previousSiblings(elem);
      nextSiblings(elem);
      currentImage(elem.children[0].innerText);
    })
);
