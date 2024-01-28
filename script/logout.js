var signoutBtn = document.getElementById("signoutBtn");
signoutBtn.onclick = function () {
    // Use AJAX to call a server-side script to destroy the session
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Redirect to index after destroying the session
            window.location.href = "index.php";
        }
    };
    xhr.open("GET", "php/logout.php", true);
    xhr.send();
};
