const pays = document.querySelectorAll(".pay")

pays.forEach((pay) => {
    pay.addEventListener("click", () => {
        pay.classList.toggle("active");
    });
});