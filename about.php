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
   <title>Tentang Kripikitas</title>

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
         <img src="images/H.png" alt="">
      </div>

      <div class="content">
         <h3>Tentang Kripikitas</h3>
         <p>KRIPIKITAS (Kripik Kin’t Ka Batas) artinya keripik ku di daerah perbatasan. KRIPIKITAS dari hasil pertanian perbatasan dapat menjadi alternatif yang baik untuk mengembangkan potensi daerah perbatasan dan mempromosikan produk lokal dan membantu para petani dalam pengembangan usaha pertanian. Dengan memproduksi keripik dari hasil pertanian perbatasan, para petani dapat menghasilkan nilai tambah dari hasil pertanian mereka dan memperluas pasar potensial untuk produk pertanian. Selain itu, produksi keripik dari hasil pertanian perbatasan juga dapat membantu mengurangi pengangguran di daerah perbatasan dan meningkatkan pendapatan masyarakat setempat. Hal ini dapat membantu mendorong pertumbuhan ekonomi di daerah perbatasan dalam hal ini Kabupaten Bengkayang dan memperkuat komunitas lokal yang ada di Bengkayang serta menambahkan produk oleh-oleh khas Bengkayang.</p>
         <a href="contact.php" class="btn">Kontak Kami</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Tim Kripikitas</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/My .jpg" alt="">
         
         <h3>Yohanes Duhin Mukin</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/ningki.jpg" alt="">
         
         <h3>Carolus Ningki</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/essya.jpg" alt="">
         
         <h3>Essya</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

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