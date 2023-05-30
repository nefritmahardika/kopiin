<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-image.jpg" alt="">
      </div>

      <div class="content">
         <h3>C.U.K.I C.U.K.I C.U.K.I</h3>
         <p>Awalnya CUKI ini hanya sebuah group perkenalan untuk tugas CBS,
tapi lama-kelamaan banyak barudak tambahan yang nongkrong di
caringin 69a dan menginisiasi adanya grup penggerak babarudakan
icon yang bernama CUKI atau Central Unit Ke-party-an Icon karna
setelah tugas CBS selesai, tugas kami di angkatan adalah
menyejahterakan barudak icon. Bahkan koorang icon pun lahir dan
dibesarkan oleh keluarga CUKI</p>
         <a href="https://instagram.com/c.u.k.i.22" target=_blank class="btn">Wanna be like us? Think twice dude</a>
      </div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>