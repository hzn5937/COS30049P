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
            for (var i = 0; i < 6; i++) {
                var contentBox = document.querySelector(`#content${i}`);
                contentBox.contentEditable = "false";
            }
        }
    };
});
