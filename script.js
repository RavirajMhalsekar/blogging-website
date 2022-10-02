const items = document.querySelectorAll(".nav-item");
const ind = document.querySelector(".indicator");
const cards = document.querySelectorAll(".cards");
const colorPallette = [
  { background: "#264653", foreground: "#ffffff" },
  { background: "#f4a261", foreground: "#000000" },
  { background: "#2a9d8f", foreground: "#ffffff" },
  { background: "#e9c46a", foreground: "#000000" },
  { background: "#e76f51", foreground: "#ffffff" },
];

function handleIndicator(el) {
  ind.style.backgroundColor = el.dataset.bcolor;
  el.style.color = el.dataset.fcolor;
  ind.style.width = el.offsetWidth + "px";
  ind.style.left = el.offsetLeft + "px";
}

items.forEach((item, index) => {
  item.dataset.bcolor = colorPallette[index].background;
  item.dataset.fcolor = colorPallette[index].foreground;
  item.addEventListener("mousemove", (e) => {
    handleIndicator(e.target);
  });
  item.addEventListener("click", (e) => {
    items.forEach((item) => item.classList.remove("active"));
    e.target.classList.add("active");
    document
      .querySelector(".active")
      .style.setProperty("--bc", e.target.dataset.bcolor);
  });
  item.addEventListener("mouseleave", (e) => {
    e.target.style.color = "#000000";
  });
});

document.querySelectorAll(".projcard-description").forEach(function (box) {
  $clamp(box, { clamp: 6 });
});

cards.addEventListener("click",(e)=>{
  cards.forEach((cards) => cards.classList.remove("active-card"));
  e.target.classList.add("active-card");
});
