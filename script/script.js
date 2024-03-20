window.onunload = function () {
    // Use AJAX to call a server-side script to destroy the session
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/close.php", true);
    xhr.send();
};

fetch("api/get_coin.php")
    .then(function (response) {
        return response.json();
    })
    .then((data) => {
        document.querySelector("#totalCoin").innerHTML = data;
    })
    .catch((error) => {
        console.log(error);
    });