function gray() {
    document.getElementById("img1").style.filter = "grayscale(100%)";
}

function nogray() {
    document.getElementById("img1").style.filter = "grayscale(0%)";
}

function store() {
    localStorage.username = document.getElementById('username').value;
    localStorage.password = document.getElementById('password').value;
}