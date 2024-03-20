fetch("api/get_data.php")
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
                    <a href='payment.php' class='button2'>Buy</a>
                </div>
                </div>
            </div>
            `;
        });
        document.querySelector(".games").innerHTML = htmls.join("");
    })
    .catch((error) => {
        console.log(error);
    });
