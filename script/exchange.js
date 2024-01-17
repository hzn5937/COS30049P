var coinCost = 40;
var coinCount = 0;
window.onload = function() {
    x = document.getElementById('coinCost').innerHTML = 'Cost for 1 coin: ' + coinCost + '$';
    y = document.getElementById('coin').innerHTML = 'Coints: ' + coinCount
}
function checkValue() {
    var error = '';
    x = document.getElementById('exchange').value
    var pattern = /^\d+$/; 
    if (!x.match(pattern)) {error += "Wrong value type inserted\n";}
    if (x < coinCost) {error += 'Not enough money\n'} 
    if (error != '') {
        alert(error);
        document.getElementById('exchange').value = null;
    } else {
        printCoin(x);
        document.getElementById('exchange').value = null;
    }
}
function printCoin(value) {
    var x = Math.floor(value/coinCost);
    coinCount += x;
    document.getElementById('coin').innerHTML = 'Coins: ' + coinCount;
}