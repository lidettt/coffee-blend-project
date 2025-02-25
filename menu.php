  <?php
      include 'header.html';  
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
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
    <link rel="stylesheet" href="header-style.css" />
    <link rel="stylesheet" href="menu-style.css" />
    <link rel="stylesheet" href="footer-style.css" />
    <script
      src="https://kit.fontawesome.com/5f78a8b2c2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

    <!-- Menu -->
<!-- Hero -->
    <div class="menu-text-container">
      <div class="our-menu">OUR MENU</div>
      <div class="home-menu">
        <a href="index.php" target="_blank">HOME</a>
        <a class="color-standing" href="menu.php">MENU</a>
      </div>
    </div>
    <!-- End Hero  -->
  
    <!-- Black Information Box -->
    <div class="box">
      <div class="info-container">
        <i class="fa-solid fa-phone"></i>
        <div>
          <span>000 (123) 456 7890</span>
          <p>A small river named Duden flows by their place and supplies.</p>
        </div>
        <i class="fa-solid fa-location-crosshairs"></i>
        <div>
          <span>198 West 21th Street</span>
          <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
        </div>
        <i class="fa-solid fa-clock"></i>
        <div>
          <span>Open Monday-Friday</span>
          <p>8:00am - 9:00pm</p>
        </div>
      </div>
      <!-- End Black Information Box -->
      <!-- Book a Table Box -->
      <form class="booking-box">
        <span class="book-table-title">BOOK A TABLE</span>
        <div class="booking-name-container">
          <div>
            <p>First Name</p>
            <input type="text" />
          </div>
          <div>
            <p>Last Name</p>
            <input type="text" />
          </div>
        </div>
        <div class="booking-info-container">
          <div>
            <div class="date">
              <p>Date</p>
              <i class="fa-regular fa-calendar"></i>
            </div>
            <input type="text" />
          </div>
          <div>
            <div class="time">
              <p>Time</p>
              <i class="fa-solid fa-clock"></i>
            </div>
            <input type="text" />
          </div>
          <div class="phone">
            <p>Phone</p>
            <input type="text" />
          </div>
        </div>
        <div class="message-box">
          <div>
            <p>Message</p>
            <input type="text" />
          </div>
          <div>
            <a href="login.php">login to book a table</a>
          </div>
        </div>
      </form>
    </div>
    <!-- End Book a Table Box -->
    <!-- End Menu -->

    <!-- DESSERTS AND DRINKS -->
    <section class="second-background">
      <div class="menu-container default-padding">
        <div>
          <!-- DESSERTS -->
          <div class="menu-category">DESSERTS</div>
          <!-- Hot Cake Honey -->
          <div class="menu-box">
            <img
              src="images/dessert-3.jpg"
              alt="Hot Cake Honey"
            />
            <div class="menu-info-box">
              <div class="menu-name-box">
                <p class="menu-name">Hot Cake Honey</p>
                <p class="menu-price">$3</p>
              </div>

              <p class="menu-description">
                A small river named Duden flows by their place and supllies
              </p>
            </div>
          </div>
          <!-- End Hot Cake Honey -->

          <!-- Pancake -->
          <div class="menu-box">
            <img src="images/dessert-6.jpg" alt="Pancake" />
            <div class="menu-info-box">
              <div class="menu-name-box">
                <p class="menu-name">Pancake</p>
                <p class="menu-price">$3</p>
              </div>

              <p class="menu-description">
                A small river named Duden flows by their place and supllies
              </p>
            </div>
          </div>
        </div>
        <!-- End Pancake -->

        <!-- END DESSERTS -->

        <!-- DRINKS -->
        <div>
          <div class="menu-category">DRINKS</div>
          <!-- Coffee Capuccino -->
          <div class="menu-box">
            <img
              src="images/menu-4.jpg"
              alt="Coffee Capuccino"
            />
            <div class="menu-info-box">
              <div class="menu-name-box">
                <p class="menu-name">Coffee Capuccino</p>
                <p class="menu-price">$6</p>
              </div>

              <p class="menu-description">
                A small river named Duden flows by their place and supllies
              </p>
            </div>
          </div>
          <!-- End Coffee Capuccino -->

          <!-- Ice Coffee -->
          <div class="menu-box">
            <img src="images/bg_2.jpg" alt="Ice Coffee" />
            <div class="menu-info-box">
              <div class="menu-name-box">
                <p class="menu-name">Ice Coffee</p>
                <p class="menu-price">$7</p>
              </div>

              <p class="menu-description">
                A small river named Duden flows by their place and supllies
              </p>
            </div>
          </div>
        </div>

        <!-- END DRINKS -->
      </div>
      <!-- DISCOVER OUR PRODUCTS -->
      <div class="discover-container">
        <div class="discover-text-container">
          <span class="discover">Discover</span>
          <span class="our-products">OUR PRODUCTS</span>
        </div>
        <div class="discover-description">
          <span
            >Far far away,behind the word mountains,far from the countries
            Vakalia and </span
          ><span>Consonantia, there live the blind texts.</span>
        </div>
      </div>
      <!-- END DISCOVER OUR PRODUCTS -->

      <!-- DRINKS AND DESSERTS SECTION -->
      <div class="button-container">
        <button class="drinks-btn">Drinks</button
        ><button class="desserts-btn">Desserts</button>
      </div>
      <div class="button-info-container drinks">
        <!-- first drink below buttons -->
        <div class="item-container drink1">
          <img src="images/menu-4.jpg" alt="" />
          <p class="button-info-name_price">COFFEE CAPUCCINO</p>
          <p class="button-info-desc">A small river named Duden flows by</p>
          <p class="button-info-desc">their place and supplies</p>
          <p class="button-info-name_price">$6</p>
          <button>show</button>
        </div>
        <!-- End first drink below buttons -->
        <!-- Second drink below buttons -->
        <div class="item-container drink2">
          <img src="images/bg_2.jpg" alt="" />
          <p class="button-info-name_price">ICE COFFEE</p>
          <p class="button-info-desc">A small river named Duden flows by</p>
          <p class="button-info-desc">their place and supplies</p>
          <p class="button-info-name_price">$7</p>
          <button>show</button>
        </div>
      </div>
      <!-- End second drink below buttons -->
      <div class="button-info-container desserts">
        <!-- first dessert below buttons -->
        <div class="item-container dessert1">
          <img src="images/dessert-3.jpg" alt="" />
          <p class="button-info-name_price">HOT CAKE HONEY</p>
          <p class="button-info-desc">A small river named Duden flows by</p>
          <p class="button-info-desc">their place and supplies</p>
          <p class="button-info-name_price">$3</p>
          <button>show</button>
        </div>
        <!-- End first dessert below buttons -->
        <!-- Second dessert below buttons -->
        <div class="item-container dessert2">
          <img src="images/dessert-6.jpg" alt="" />
          <p class="button-info-name_price">PANCAKE</p>
          <p class="button-info-desc">A small river named Duden flows by</p>
          <p class="button-info-desc">their place and supplies</p>
          <p class="button-info-name_price">$3</p>
          <button>show</button>
        </div>
      </div>
      <!-- End Second Dessert below buttons -->
      <!-- End Item below buttons -->

     

    <script src="index.js"></script>
  </body>
</html>
<?php
include 'footer.html';  
?>