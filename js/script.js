const items = document.querySelectorAll(".nav-item");
const ind = document.querySelector(".indicator");
const cardsList = document.querySelectorAll(".card p");
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


cardsList.forEach((item) => {
  item.addEventListener("click", (e) => {
    cardsList.forEach((item) => item.classList.remove("active-card"));
    e.target.classList.add("active-card");
  });
});
var key = "all";
filterBlog(key, 0);

function filterBlog(key, _idx) {
  const blogs = document.querySelectorAll(".projcard");
  cardsList.forEach((item) => item.classList.remove("active-card"));
  cardsList[_idx].classList.add("active-card");
  blogs.forEach((item) => {
    item.classList.remove("active");
    item.classList.add("hide");
  });
  blogs.forEach((blog) => {
    var dataCategory = blog.getAttribute("data-category");
    if (dataCategory == key || key == "all") {
      blog.classList.remove("hide");
      blog.classList.add("active");
    }
  });
}
