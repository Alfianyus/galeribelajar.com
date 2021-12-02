<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Navbar</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Passion+One&display=swap" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <div class="logo">
        <h4>Galeribelajar</h4>
      </div>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Product</a></li>
        <li><a href="">Service</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">About</a></li>
      </ul>

      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>

    <script src="script.js"></script>
  </body>
</html>

<!-- Akhir index.php -->

<!-- script.js -->
const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
  nav.classList.toggle('slide');
});

<!-- Akhir scrip.js -->
<!-- style.css -->
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Montserrat', sans-serif;
  overflow-x: hidden;
}

/* Navbar */

nav {
  display: flex;
  background-color: rgb(176, 130, 219);
  justify-content: space-around;
  /* padding: 20px 0; */
  color: rgb(205, 166, 241);
  height: 50px;
  align-items: center;
}

nav .logo {
  font-family: 'Oswald', sans-serif;
  letter-spacing: 3px;
}

nav ul {
  display: flex;
  list-style: none;
  width: 40%;
  justify-content: space-between;
}

nav ul li a {
  color: rgb(136, 35, 231);
  text-decoration: none;
  font-size: 1em;
}

nav ul li a:hover {
  color: rgb(253, 232, 232);
}

/* Hamburger Menu */

.menu-toggle {
  display: none;
  flex-direction: column;
  height: 20px;
  justify-content: space-between;
  position: relative;
}

.menu-toggle input {
  position: absolute;
  width: 40px;
  height: 28px;
  left: -6px;
  top: -5px;
  opacity: 0;
  cursor: pointer;
  z-index: 2;
}

.menu-toggle span {
  display: block;
  width: 28px;
  height: 3px;
  background-color: yellow;
  border-radius: 3px;
  transition: all 0.5s;
}

/* Hamburger menu animatiaon */
.menu-toggle span:nth-child(2) {
  transform-origin: 0 0;
}
.menu-toggle span:nth-child(4) {
  transform-origin: 0 100%;
}

.menu-toggle input:checked ~ span:nth-child(2) {
  background-color: white;
  transform: rotate(45deg) translate(-1px, -1px);
}
.menu-toggle input:checked ~ span:nth-child(4) {
  background-color: white;
  transform: rotate(-45deg) translate(-1px, 0);
}
.menu-toggle input:checked ~ span:nth-child(3) {
  transform: scale(0);
}

/* Responsive Breakepoint */

/* Ukuran tablet */
@media screen and (max-width: 768px) {
  nav ul {
    width: 50%;
  }
}

/* Ukuran Mobile */
@media screen and (max-width: 576px) {
  .menu-toggle {
    display: flex;
  }
  nav ul {
    position: absolute;
    right: 0;
    top: 0;
    width: 80%;
    height: 100vh;
    justify-content: space-evenly;
    flex-direction: column;
    align-items: center;
    background-color: rgb(176, 130, 219);
    z-index: -1;
    transform: translateX(100%);
    transition: all 1s;
    opacity: 0;
  }

  nav ul.slide {
    opacity: 1;
    transform: translateX(0);
  }
}


<!-- Akhir style.css -->
