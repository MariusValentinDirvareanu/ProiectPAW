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

window.onload = function () {
    if (localStorage.username != null) {
        document.getElementById('auth').style.display = '';
        document.getElementById('sub').style.display = 'none';
    }
    else {
        document.getElementById('auth').style.display = 'none';
        document.getElementById('sub').style.display = '';
    }
}

function auth() {
    if (document.getElementById('username').value == localStorage.username && document.getElementById('password').value == localStorage.password) {
        alert('Bun venit!');
    }
    else{
        alert('Username sau parola gresita!');
    }
}