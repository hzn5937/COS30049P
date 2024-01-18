var coinCost = 40;
var coinCount = 0;
var coinEarned = 0;
window.onload = function() {
    document.getElementById('coinCost').innerHTML = 'Cost for 1 coin: ' + coinCost + '$';
    document.getElementById('coin').innerHTML = 'Total Coins: ' + coinCount;
    document.getElementById('coinEarned').innerHTML = 'Number of coins earned: ' + coinEarned;
}
function coinEarnedCheck() {
    x = document.getElementById('exchange').value;
    coinEarned = Math.round((x/coinCost) * 10)/10;
    if (coinEarned < 1) {coinEarned = 0;}
    document.getElementById('coinEarned').innerHTML = 'Number of coins earned: ' + coinEarned;
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
    var x = Math.round((value/coinCost) * 10)/10;
    coinCount += x;
    document.getElementById('coin').innerHTML = 'Total Coins: ' + coinCount;
}