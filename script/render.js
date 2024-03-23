function render(url) {
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then((data) => {
            const htmls = data.map((item) => {
                return `
            <div class='responsive'>
                <div class='gallery'>
                <a href='${item.image_path}'>
                    <img src='${item.image_path}' alt='${item.name}' class='window' width='100' height='100''>
                </a>
                <div class='cashless'>
                    <span>${item.price}</span><img src='images/coin.png' alt='Your Coin' class='coin-image'>
                    <a href='payment.php' id='${item.id}' class='button2'>Buy</a>
                </div>
                </div>
            </div>
            `;
            });
            document.querySelector(".games").innerHTML = htmls.join("");

            data.forEach(function (item) {
                var button = document.getElementById(item.id);
                button.onclick = function (e) {
                    const id = item.id;
                    e.preventDefault();
                    window.location.href = `payment.php?id=${id}`;
                };
            });
        })
        .catch((error) => {
            console.log(error);
        });
}

document.addEventListener("DOMContentLoaded", function () {
    var searchForm = document.getElementById("searchForm");
    var searchBar = document.getElementById("searchBar");
    var filter = document.getElementById("gerne");
    const url = "api/get_data.php";

    searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
    });

    searchBar.addEventListener("input", function () {
        var searchTerm = searchBar.value;
        var category = filter.value;
        const url = "api/get_data.php";

        if (category === "default" && searchTerm !== "") {
            param = `search=${searchTerm}`;
        } else if (category !== "default" && searchTerm === "") {
            param = `category=${category}`;
        } else {
            param = `search=${searchTerm}&category=${category}`;
        }
        console.log(`${url}?${param}`);
        render(`${url}?${param}`);
    });

    filter.addEventListener("change", function () {
        var searchTerm = searchBar.value;
        var category = filter.value;
        if (category === "default") {
            category = "";
        }

        if (category === "default" && searchTerm !== "") {
            param = `search=${searchTerm}`;
        } else if (category !== "default" && searchTerm === "") {
            param = `category=${category}`;
        } else {
            param = `search=${searchTerm}&category=${category}`;
        }
        console.log(`${url}?${param}`);
        render(`${url}?${param}`);
    });
});
