<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD HOTEL- Contact</title>
    <?php require('include/links.php'); ?>

</head>

<body class="bg-light">
    <!-- header  -->
  <?php require('include/header.php'); ?>
<!-- heading  -->
    <div class="my-5 px-4">
      <h2 class="fw-bold hfont text-center">Contact Us</h2>
      <div class="h-line bg-dark"></div>
      <p class="mt-3 text-center">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Numquam, autem cumque quo a in magnam perferendis ipsa adipisci illo fuga!
      </p>
    </div>
    <!-- content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 px-4 col-md-6">
          <div class="bg-white rounded shadow p-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119037.49550084474!2d81.338075!3d21.19526785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293cccec49ed45%3A0x2b3ff3bd73c91877!2sBhilai%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1712846158534!5m2!1sen!2sin"height="320"  loading="lazy" class="w-100 rounded mb-4"></iframe>
            <h5>Address</h5>
            <a href="https://maps.app.goo.gl/9zSkGCaszf4TBFRF8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i>XY ABC , Bhilai , CG</a>
            <!-- call -->
            <h5 class="mt-4">Call us</h5>
               <a href="tel: +91988989898" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-telephone-inbound-fill"></i> +91988978998
                </a>
                <br>
                <a href="tel: +91988989898" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-telephone-inbound-fill"></i> +91988978998
                </a>
                <!-- mail  -->
                <h5 class="mt-4">Email us at:</h5>
                <a href="mailto: garimadeshmukh267@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-envelope"></i> garimadeshmukh267@gmail.com
                </a>
                <!-- follow  -->
                <h5 class="mt-4">Follow us</h5>
               <a href="#" class="d-inline-block text-dark fs-6 me-2">
                 <i class="bi bi-twitter-x me-1"></i>
                </a>
               
                <a href="#" class="d-inline-block text-dark fs-6 me-2">
                  <i class="bi bi-facebook me-1"></i> 
                 </a>
                
                 <a href="#" class="d-inline-block text-dark fs-6 ">
                   <i class="bi bi-instagram me-1"></i> 
                 </a>

          </div>
        </div>

        <div class="col-lg-6 px-4 col-md-6">
          <div class="bg-white rounded shadow p-4">
              <form >
              <h5><i class="bi bi-send"></i> Send a Message to us:</h5>
                
              <div class="mt-5">
                  <label class="form-label" style="font-weight:500;">Name</label>
                  <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Email</label>
                  <input type="email" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Subject</label>
                  <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                  <label class="form-label" style="font-weight:500;">Message</label>
                  <textarea class="form-control shadow-none" rows="4"  style="resize:none;"></textarea>
              </div>
              <button class="btn text-white customcolor mt-4 " type="submit"> Send</button>
              </form>
          </div>
        </div>
      </div>
    </div>

  <!-- footer  -->
  <?php require('include/footer.php'); ?>



 
</body>
</html>