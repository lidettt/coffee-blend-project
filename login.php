<?php
      include 'header.html';  
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="header-style.css" />
    <link rel="stylesheet" href="footer-style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Liter&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/5f78a8b2c2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header -->
    <!-- <div class="header"> -->
    <!-- <nav>
        <div class="logo">
          <span class="top">Coffee</span>
          <span class="bottom">blend</span>
        </div>
        <ul>
          <li>
            <a href="#"><span>Home</span></a>
          </li>
          <li><a href="#">menu</a></li>
          <li><a href="#">services</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">services</a></li>
          <li><a href="#">login</a></li>
          <li><a href="#">register</a></li>
        </ul>
      </nav> -->
    <!-- <nav id="header">
      <div class="logo">
        <span class="top">COFFEE</span>
        <span class="bottom">BLEND</span>
      </div>
      <div class="nav-bar">
        <div class="home">HOME</div>
        <div>MENU</div>
        <div>SERVICES</div>
        <div>ABOUT</div>
        <div>CONTACT</div>
        <div>LOGIN</div>
        <div>REGISTER</div>
      </div>
    </nav> -->
    <!-- content -->
    <section class="hero">
      <div class="content">
        <h2>LOGIN</h2>
        <div class="home-login">
          <a href="index.php" target="_blank">HOME</a>
          <a class="color-standing" href="login.php">LOGIN</a>
        </div>
      </div>
    </section>

    <section class="login-container">
      <div class="login-box">
        <h2>LOGIN</h2>
        <form action="index.php" method="POST">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Email" required />

          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            placeholder="Password"
            required
          />

          <button type="submit">Login</button>
        </form>
      </div>
    </section>

    <script src="index.js"></script>
  </body>
</html>
<?php

include 'footer.html';  
?>
