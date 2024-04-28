<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD HOTEL- About</title>
      <!-- Link Swiper's CSS -->
      
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('include/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<style>
  .box:hover{
    border-top-color: var(--teal) !important;
  }
</style>
</head>

<body class="bg-light">
    <!-- header  -->
  <?php require('include/header.php'); ?>
<!-- heading  -->
    <div class="my-5 px-4">
      <h2 class="fw-bold hfont text-center">About Us</h2>
      <div class="h-line bg-dark"></div>
      <p class="mt-3 text-center">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Numquam, autem cumque quo a in magnam perferendis ipsa adipisci illo fuga!
      </p>
    </div>
    <!-- content -->
<div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem, ipsum dolor.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sit amet consectetur adipisicing elit. Iure sit amet consectetur adipisicing elit. Iure facilis exercitationem expedita temporibus accusamus incidunt! A, tempora. Natus, neque ipsa.</p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about/about.jpg" class="w-100">
        </div>
</div>

<div class="container mt-5">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="images/about/hotel.svg" width="70px">
                  <h4 class="mt-3">
                    100+ Rooms
                  </h4>
                </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
              <img src="images/about/customers.svg" width="70px">
              <h4 class="mt-3">
                200+ Customers
              </h4>
            </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">
            100+ Ratings
          </h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class=" bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">
            20+ staff
          </h4>
        </div>
        </div>

        </div>
      </div>
</div>

<h3 class="my-5 fw-bold hfont text-center">Management Team</h3>
<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide text-center bg-white overflow-hidden rounded">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Randomm</h5>
      </div>
      <div class="swiper-slide text-center bg-white overflow-hidden rounded">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Randomm</h5>
      </div>
      <div class="swiper-slide text-center bg-white overflow-hidden rounded">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Randomm</h5>
      </div>
      <div class="swiper-slide text-center bg-white overflow-hidden rounded">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Randomm</h5>
      </div>
      <div class="swiper-slide text-center bg-white overflow-hidden rounded">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Randomm</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>


  <!-- footer  -->
  <?php require('include/footer.php'); ?>



   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
       pagination: {
         el: ".swiper-pagination",
       },
      breakpoints: {
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        }, 
         768:{
          slidesPerView:2,
        }, 
         1024:{
          slidesPerView:3,
        },
      }
     });
   </script>
</body>
</html>