window.onunload = function () {
    // Use AJAX to call a server-side script to destroy the session
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/close.php", true);
    xhr.send();
};