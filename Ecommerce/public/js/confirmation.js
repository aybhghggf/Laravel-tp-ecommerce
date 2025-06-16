let button= document.getElementById("byNow");

let div= document.getElementById("checkout-form");


button.addEventListener("click",()=>{
    div.style= "display: block";
    button.innerText= "Annuler";
    button.addEventListener("click",()=>{
    div.style= "display: none";
    button.innerText= "Buy Now";
})
}) 
