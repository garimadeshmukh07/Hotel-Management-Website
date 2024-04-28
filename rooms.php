<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD HOTEL- Rooms</title>
    <?php require('include/links.php'); ?>


</head>

<body class="bg-light">
    <!-- header  -->
  <?php require('include/header.php'); ?>
<!-- heading  -->
    <div class="my-5 px-4">
      <h2 class="fw-bold hfont text-center"> Our Rooms</h2>
      <div class="h-line bg-dark"></div>

    </div>

    <!-- rooms -->
    <div class="container">
      <div class="row">


        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch ">
                  <h4 class="mt-2">FILTERS</h4>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdd" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterdd">
                      <div class="border border-2  bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size:18px; text-transform: uppercase;">Check Avaliability</h5>
                        <label class="form-label" >Check-in</label>
                       <input type="date" class="form-control shadow-none mb-3">
                       <label class="form-label" >Check-out</label>
                       <input type="date" class="form-control shadow-none">

                      </div>
                      <div class="border border-2  bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size:18px; text-transform: uppercase;">Facilities</h5>
                        <div class="mb-2">
                          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                          <label class="form-check-label" for="f1" >Facility 1</label>
                       </div>
                       <div class="mb-2">
                          <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                          <label class="form-check-label" for="f2" >Facility 2</label>
                       </div>
                       <div class="mb-2">
                          <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                          <label class="form-check-label" for="f3" >Facility 3</label>
                       </div>

                      </div>
                      <div class="border border-2 bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size:18px; text-transform: uppercase;">Guests</h5>
                        <div class="d-flex">

                          <div class="me-3">
                            <label class="form-label" >Adults</label>
                            <input type="number" class="form-control shadow-none mb-3">
                          </div>
                          <div>
                            <label class="form-label" >Childrens</label>
                            <input type="number" class="form-control shadow-none mb-3">
                          </div>
                        </div>

                      </div>
                  </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-9 col-md-12 px-4">
                  <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">

                          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                          </div>

                          <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                              <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
                              </div>
                              <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
                              </div>
                              <div class="Guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>
                    
                              </div>


                          </div>

                          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4  text-center">
                            <h6 class="mb-4">₹200 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white shadow-none customcolor mb-2">BOOK NOW</a>
                             <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">More Details</a>
                          </div>

                        </div>
          </div>

          <!-- c2  -->
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">

              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>

              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                  <div class="features mb-3">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
                  </div>
                  <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
                  </div>
                  <div class="Guests">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>
        
                  </div>


              </div>

              <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">₹200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white shadow-none customcolor mb-2">BOOK NOW</a>
                 <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">More Details</a>
              </div>

            </div>
</div>

<!-- c3 -->

<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">

    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>

    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name</h5>
        <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathrooms</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
        </div>
        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">wifis</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Fruits</span>
        </div>
        <div class="Guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">4 Childern</span>

        </div>


    </div>

    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4  text-center">
      <h6 class="mb-4">₹200 per night</h6>
      <a href="#" class="btn btn-sm w-100 text-white shadow-none customcolor mb-2">BOOK NOW</a>
       <a href="#" class="btn btn-sm  w-100 btn-outline-dark shadow-none">More Details</a>
    </div>

  </div>
</div>

<!-- end  -->
        </div>

      </div>
    </div>

  <!-- footer  -->
  <?php require('include/footer.php'); ?>



 
</body>
</html>