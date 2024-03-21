window.onunload = function () {
    // Use AJAX to call a server-side script to destroy the session
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/close.php", true);
    xhr.send();
};

function fetchCoin() {
    fetch("api/get_coin.php")
        .then(function (response) {
            return response.json();
        })
        .then((data) => {
            var coin = data['coin']
            document.querySelector("#totalCoin").innerHTML = coin
        })
        .catch((error) => {
            console.log(error);
        });
}

document.addEventListener("DOMContentLoaded", function()
{
    fetchCoin()
})

