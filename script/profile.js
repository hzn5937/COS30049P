document.addEventListener("DOMContentLoaded", function () {
    var saveEditBtn = document.querySelector(".button2");

    saveEditBtn.onclick = function () {
        console.log("Save button clicked");
        if (saveEditBtn.innerHTML == "Edit") {
            saveEditBtn.innerHTML = "Save";
            for (var i = 1; i < 6; i++) {
                var contentBox = document.querySelector(`#content${i}`);
                contentBox.contentEditable = "true";
            }
        } else {
            saveEditBtn.innerHTML = "Edit";
            for (var i = 1; i < 6; i++) {
                var contentBox = document.querySelector(`#content${i}`);
                contentBox.contentEditable = "false";
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "api/update_profile.php", true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            content1 = document.querySelector("#content1").innerText;
            content2 = document.querySelector("#content2").innerText;
            content3 = document.querySelector("#content3").innerText;
            content4 = document.querySelector("#content4").innerText;
            content5 = document.querySelector("#content5").innerText;
            xhr.send(
                JSON.stringify({
                    full_name: content1,
                    age: content2,
                    phone_number: content3,
                    interest: content4,
                    user_address: content5,
                })
            );
            content0 = document.querySelector("#content0");
            content0.innerText = content1;
        }
    };

    // Fetch user profile data and populate the fields
    fetch("api/get_profile.php")
        .then((response) => response.json())
        .then((data) => {
            document.querySelector("#content0").innerText = data["full_name"];
            document.querySelector("#content1").innerText = data["full_name"];
            document.querySelector("#content2").innerText = data["age"];
            document.querySelector("#content3").innerText = data["phone_number"];
            document.querySelector("#content4").innerText = data["interest"];
            document.querySelector("#content5").innerText = data["user_address"];
        })
        .catch((error) => console.error("Error fetching profile:", error));
});
