const addToCartBtn = document.querySelector(".aside__btn");

function addToCartHandler() {
    addToCartBtn.classList.add("disabled");
    alert("Товар добавлен в корзину");
}

addToCartBtn.addEventListener("click", addToCartHandler);
