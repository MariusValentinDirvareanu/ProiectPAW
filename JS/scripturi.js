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

window.onload = function() {
    if (localStorage.username != null) {
        document.getElementById('aut').style.display = '';
        document.getElementById('sub').style.display = 'none';
    } else {
        document.getElementById('aut').style.display = 'none';
        document.getElementById('sub').style.display = '';
    }
}

function auth() {
    if (document.getElementById('username').value == localStorage.username && document.getElementById('password').value == localStorage.password) {
        alert('Bun venit!');
    } else {
        alert('Username sau parola gresita!');
    }
}

function schimbareculoare() {
    var x = document.getElementById('main');
    x.style.backgroundColor = 'red';
}

function meniu() {
    var x = document.getElementsByTagName('nav');
    x[0].style.cssFloat = 'left';
    x[0].style.height = '100%';
    var y = document.getElementById('main');
    y.style.cssFloat = 'right';
    var z = document.getElementsByTagName('li');
    for (let index = 0; index < z.length; index++) {
        z[index].style.cssFloat = 'none';
    }
}