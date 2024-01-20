const coinCost = 40;
var coinCount = 0;
var totalCost = 0;
const decimal = /^\d*\.?\d+$/;

const coinInput = document.getElementById("exchange");
const totalCostElement = document.getElementById("totalCost");
const totalCoin = document.getElementById("totalCoin");

window.onload = function () {
    document.getElementById("coinCost").innerHTML = "Cost for 1 coin: " + coinCost + "$";
    totalCoin.innerHTML = coinCount;
    totalCostElement.innerHTML = "Total cost: " + totalCost + "$";
};

function totalCostCheck() {
    totalCoinInput = coinInput.value;
    if (totalCoinInput < 1 || !totalCoinInput.match(decimal)) {
        totalCost = 0;
    } else {
        totalCost = totalCoinInput * coinCost;
    }
    document.getElementById("totalCost").innerHTML = "Total cost: " + totalCost + "$";
}
function checkValue() {
    var error = "";
    totalCoinInput = coinInput.value;

    if (!totalCoinInput.match(decimal)) {
        error += "Wrong value type inserted.\n";
    }
    if (totalCoinInput < 1) {
        error += "Minimum deposit is 1 coin.\n";
    }
    if (error != "") {
        alert(error);
        totalCoinInput.innerHTML = null;
    } else {
        printCoin(totalCoinInput);
        totalCoinInput.innerHTML = null;
    }
}
function printCoin(value) {
    coinCount += parseInt(value);
    totalCoin.innerHTML = coinCount;
}
