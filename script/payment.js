document.addEventListener("DOMContentLoaded", function () {
    var buyButton = document.getElementById("buy-button");
    var id = document.querySelector(".button2").id;

    buyButton.onclick = function (e) {
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "api/payment.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send(JSON.stringify({ id: id }));

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.message);
            }
        };
    };
});
