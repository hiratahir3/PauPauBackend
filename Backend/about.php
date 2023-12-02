<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>We believe in providing the best to our customers. With our user-friendly website, you can easily place your orders and have them delivered at your doorstep!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We provide high quality products at reasonable prices. Trust us, and we promise you won't be disappointed.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Creators</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Student at FAST NUCES</p>
         <h3>Hira Tahir</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>Student at FAST NUCES</p>
         <h3>Naima Jamal</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Student at FAST NUCES</p>
         <h3>Lailumah Nadeem</h3>
      </div>


   </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>