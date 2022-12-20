const panels = document.querySelectorAll(".panel");

panels.forEach((panels) => {
    panels.addEventListener("click", () =>{
        removeActiceClasses();
        panels.classList.add("active");
    });
});

function removeActiceClasses() {
    panels.forEach((panels) =>{
        panels.classList.remove("active");
    });
}