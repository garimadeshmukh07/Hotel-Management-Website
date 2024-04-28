<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD HOTEL- Home</title>
    <?php require('include/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<style>
      .avaform{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen  and (max-width:575px){
        .avaform{
          margin-top: 10px;
          padding: 0 35px;
        }
      }
</style>
<body class="bg-light">
    
<?php require('include/header.php'); ?>


<!-- carousel -->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images\carousel\1.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images\carousel\2.png" class="w-100 d-block" />
      </div> <div class="swiper-slide">
        <img src="images\carousel\3.png" class="w-100 d-block" />
      </div> <div class="swiper-slide">
        <img src="images\carousel\4.png" class="w-100 d-block" />
      </div> <div class="swiper-slide">
        <img src="images\carousel\5.png" class="w-100 d-block" />
      </div> <div class="swiper-slide">
        <img src="images\carousel\6.png" class="w-100 d-block" />
      </div>
      <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
    </div>
  </div>
</div>

<!-- check ava form  -->
<div class="container avaform">
  <div class="row">
    <div class="col-lg-12 shadow p-4 rounded bg-white">
      <h5 class="mb-4">Check Avaliability Form</h5>
      <form >
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Check-in</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Check-Out</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Adult</label>
            <select class="form-select  shadow-none">
            
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight:500;">Childern</label>
            <select class="form-select  shadow-none">
             
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3">
          <button class="btn text-white shadow-none customcolor" type="submit"> SUBMIT</button>
          </div> 
        </div>
      </form>
    </div>
  </div>
</div>  

<!-- OUR ROOM -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold hfont">Our Rooms</h2>
<div class="container ">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card boder-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple room name</h5>
          <h6 class="mb-4">₹200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>

          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>

         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white shadow-none customcolor">BOOK NOW</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
         </div>

        </div>
      </div>
      
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card boder-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple room name</h5>
          <h6 class="mb-4">₹200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>

          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>

         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white shadow-none customcolor">BOOK NOW</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
         </div>

        </div>
      </div>
      
    </div> <div class="col-lg-4 col-md-6 my-3">
      <div class="card boder-0 shadow" style="max-width: 350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Simple room name</h5>
          <h6 class="mb-4">₹200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
          </div>

          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>

          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
         </div>

         <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white shadow-none customcolor">BOOK NOW</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
         </div>

        </div>
      </div>
      
    </div>

    <div class="col-lg-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" >MORE ROOMS >></a>
        
        </div> 
  </div>
</div>
 
<!-- OUR FACILITES -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold hfont">Our Facilities</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow  py-4 my-2">
        <img src="images/facilities/IMG_27079.svg" width="80px">
        <h5 class="mt-2">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow  py-4 my-2">
      <img src="images/facilities/IMG_41622.svg" width="80px">
      <h5 class="mt-3">TV</h5>
  </div>
  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow  py-4 my-2">
    <img src="images/facilities/IMG_27079.svg" width="80px">
    <h5 class="mt-3">Heater</h5>
</div>

<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow   py-4 my-2">
  <img src="images/facilities/IMG_27079.svg" width="80px">
  <h5 class="mt-3">Heater</h5>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow  py-4 my-2">
  <img src="images/facilities/IMG_27079.svg" width="80px">
  <h5 class="mt-3">Heater</h5>
</div>
<div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" >More Facilities >></a>
     
     </div> 
  </div>
</div>

<!-- OUR Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold hfont">Testimonials</h2>
<div class="container mt-5">
  <div class="swiper Swiper-testi">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h6 class="m-0 ms-2">Random user</h6>
         </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur distinctio quidem iste expedita libero minima necessitatibus, voluptas non nobis mollitia! Lorem ipsum dolor sit.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h6 class="m-0 ms-2">Random user2</h6>
         </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur distinctio quidem iste expedita libero minima necessitatibus, voluptas non nobis mollitia! Lorem ipsum dolor sit.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/IMG_96423.svg" width="30px">
          <h6 class="m-0 ms-2">Randommmmm user</h6>
         </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur distinctio quidem iste expedita libero minima necessitatibus, voluptas non nobis mollitia! Lorem ipsum dolor sit.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none" >Know More >></a>
       
       </div> 
</div>

<!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold hfont">Reach Us</h2>
<div class="container">
  <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119037.49550084474!2d81.338075!3d21.19526785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293cccec49ed45%3A0x2b3ff3bd73c91877!2sBhilai%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1712846158534!5m2!1sen!2sin"height="320"  loading="lazy" class="w-100 rounded"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
              <div class="bg-white p-4 rounded mb-4">
              
                <h5>Call us</h5>
               <a href="tel: +91988989898" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-telephone-inbound-fill"></i>+91988978998
                </a>
                <br>
                <a href="tel: +91988989898" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-telephone-inbound-fill"></i>+91988978998
                </a>

              </div>

              <div class="bg-white p-4 rounded mb-4">
              <h5>Follow us</h5>
               <a href="#" class="d-inline-block mb-3">
                 <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-twitter-x me-1"></i>Twitter</span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i>Facebook</span>
                 </a>
                 <br>
                 <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-instagram me-1"></i>Instagram</span>
                 </a>
               

              </div>
        </div>
   </div>
</div>

<!-- footer  -->
<?php require('include/footer.php'); ?>



  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
     
      autoplay:{
        delay: 3500,
        disableOnInteraction: false,
      }
    });

<!-- swiper testi  -->
    var swiper = new Swiper(".Swiper-testi", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView:"auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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