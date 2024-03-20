fetch("api/get_intro.php")
    .then(function (response) {
        return response.json();
    })
    .then((data) => {
        const htmls = data.map((item, index) => {
            return `
            <div class="mySlides">
                <div class="numbertext">${index+1} / 6</div>
                <img src="${item.image_path}" style="width:100%" alt="${item.name}">
            </div>
            `;
        });
        document.querySelector(".slider").innerHTML = htmls.join("");
        const html = data.map((item, index) => {
            return `
            <div class="column">
                <img class="demo cursor" src= ${item.image_path} style="width:100%" onclick="currentSlide(${index+1})" 
                alt=${item.name}>
            </div>
            `;
        });
        document.querySelector(".row").innerHTML = html.join("");
    })
    .catch((error) => {
        console.log(error);
    });
