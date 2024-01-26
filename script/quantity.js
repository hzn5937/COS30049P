document.addEventListener("DOMContentLoaded", function () {
    // Add event listeners for plus buttons
    for (let i = 1; i <= 3; i++) {
        document.getElementById(`plus${i}`).addEventListener("click", function () {
            increaseQuantity(`quantityBox${i}`);
            updatePrice();
        });
    }

    // Add event listeners for minus buttons
    for (let i = 1; i <= 3; i++) {
        document.getElementById(`minus${i}`).addEventListener("click", function () {
            decreaseQuantity(`quantityBox${i}`);
            updatePrice();
        });
    }
});

function increaseQuantity(quantityBoxId) {
    const quantityBox = document.getElementById(quantityBoxId);
    quantityBox.value = parseInt(quantityBox.value) + 1;
}

function decreaseQuantity(quantityBoxId) {
    const quantityBox = document.getElementById(quantityBoxId);
    if (quantityBox.value > 1) {
        quantityBox.value = parseInt(quantityBox.value) - 1;
    }
}

function updatePrice() {
    const subTotalPrice = document.getElementById("subTotalPrice");
    const discount = document.getElementById("discount");
    const totalPrice = document.getElementById("totalPrice");
    var total = 0;
    for (let i = 1; i <= 3; i++) {
        const quantityBox = document.getElementById(`quantityBox${i}`);
        const price = document.getElementById(`price${i}`);

        total += quantityBox.value * parseInt(price.innerHTML);
    }
    subTotalPrice.innerHTML = total;
    totalPrice.innerHTML = parseInt(subTotalPrice.innerHTML - discount.innerHTML);
}
