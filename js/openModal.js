var blogcards = document.querySelectorAll(".projcard.active");
blogcards.forEach((card) => {
  card.addEventListener("click", (e) => {
    console.log("id = " + e.target.id);
    console.log("trigger = " + e.target.getAttribute("data-modal-trigger"));
  });
});

const buttons = document.querySelectorAll("[data-modal-trigger]");
buttons.forEach((button)=>{
    button.addEventListener("click", () => {
        const trigger = button.getAttribute("data-modal-trigger");
        // console.log('trigger', trigger)
        const modal = document.querySelector(`[data-modal=${trigger}]`);
        // console.log('modal', modal)
        const contentWrapper = modal.querySelector(".content-wrapper");
        const close = modal.querySelector(".close");
    
        close.addEventListener("click", () => modal.classList.remove("open"));
        modal.addEventListener("click", () => modal.classList.remove("open"));
        contentWrapper.addEventListener("click", (e) => e.stopPropagation());
    
        modal.classList.toggle("open");
      });
});

