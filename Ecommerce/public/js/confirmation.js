let button = document.getElementById("byNow");
let div = document.getElementById("checkout-form");

button.addEventListener("click", () => {
    if (div.style.display === "block") {
        div.style.display = "none";
        button.innerText = "Buy Now";
    } else {
        div.style.display = "block";
        button.innerText = "Annuler";
    }
});
