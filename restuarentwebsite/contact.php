<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- css link -->
  <link rel="stylesheet" href="./home.css">
  <!-- cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- swiper css link -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

  <!-- header starts -->
  <section class='header' style="background-color: cadetblue;">
    <a href="./home.php" class='logo'>home</a>
    <nav class='navbar'>
      <a href="./about.php">About</a>
      <a href="./contact.php">Contact</a>
      <a href="./purphase.php">purchase</a>
    </nav>
    <div id="menu" class="fas fa-box"></div>
  </section>
<!--header ends   -->
<div class="heading" style="background: url(./images/nemali.jpg);">
    <h1 > <span style="color: white;">Contact us</span></h1>

</div>

<!-- contact section starts -->

<section class="booking">
  <h1 class="heading-title">Contact for our food items!</h1>
  <form action="book_form.php" method="post" class="book-form">

  <div class="flex">

    <div class="input-box">
      <span>name :</span>
      <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="input-box">
      <span>email :</span>
      <input type="text" placeholder="enter your email" name="email">
    </div>

    <div class="input-box">
      <span>phonenumber :</span>
      <input type="number" placeholder="enter your phonenumber" name="phone">
    </div>

    <div class="input-box">
      <span>address :</span>
      <input type="text" placeholder="enter your address" name="address">
    </div>

    <div class="input-box">
      <span>food item :</span>
      <input type="text" placeholder="enter food item that you want to order" name="fooditem">
    </div>


    <div class="input-box">
      <span>food order date:</span>
      <input type="date" placeholder="enter food order date"  name="order">
    </div>

    <div class="input-box">
      <span>food arrival date :</span>
      <input type="date" placeholder="enter food item that you want to arrive"  name="arrive">
    </div>
  </div>
  <input type="submit" value="submit" class="btn btns" name="send">
  </form>

</section>





<!-- contact section ends -->







<!-- footer section starts -->
<section class="footer">
  <div class="container">
    <div class="box">
      <h3>quick links</h3>
    <a href="./about.php">      <i class="fas fa angle-right"></i>About</a>
      <a href="./contact.php">  <i class="fas fa angle-right"></i>Contat</a>
      <a href="./purphase.php"> <i class="fas fa angle-right"></i>purphase</a>
    </div>
    <div class="box">
      <h3>extra links</h3>
    <a href="#">      <i class="fas fa angle-right"></i>Ask quesions</a>
      <a href="#">  <i class="fas fa angle-right"></i>About us</a>
      <a href="#"> <i class="fas fa angle-right"></i>terms of use</a>
    </div>

    <div class="box">
      <h3>contact us</h3>
    <a href="#">      <i class="fas fa-phone"></i>+9112892009</a>
      <a href="#">  <i class="fas-faphone"></i>+60784455</a>
      <a href="#"> <i class="fas faphone"></i>+1212455455</a>
    </div>

    <div class="box">
      <h3>social  media </h3>
    <a href="#">      <i class="fas fa-instagram"></i>instagram</a>
      <a href="#">  <i class="fas fa-twitter"></i>twitter</a>
      <a href="#"> <i class="fas fa-facebook"></i>facebook</a>
    </div>
  </div>
   <!-- credit section -->
  <div class="credit"><span style="color: white ;"> created by tejasai</span></div>
</section>

<!-- footer section ends -->


  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- js link -->
  <script src="./home.js"></script>

</body>

</html>