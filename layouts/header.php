<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/dc9a16ec4a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
          <img class="logo" src="assets/imgs/logo.png" alt="logo" />
          <h2 class="brand">DJ Gear Depot</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="shop.php">Shop</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>

                  <li class="nav-item">
                      <a href="cart.php">
                        <i class="fas fa-shopping-cart">
                            <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) {?>
                                <span class="cart-quantity"> <?php echo $_SESSION['quantity']; ?> </span>
                            <?php } ?>
                        </i>
                    </a>
                      <a href="account.php"><i class="fas fa-user"></i></a>
                  </li>

              </ul>

          </div>
      </div>
  </nav>