
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer UI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  </head>

<body>
    <header id="header" class="d-flex align-items-center" style="background: rgba(25, 25, 25, 0.95);">
		<div class="container d-flex align-items-center justify-content-between">
	
		  <h1 class="logo"><a href="index.html"></a></h1>
		  <!-- Uncomment below if you prefer to use an image logo -->
		  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	
	  <!-- ======= Header ======= -->
	  <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="import/index.html/#hero">Order</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
          
          <li><a class="nav-link scrscrolltoollto" href="oncethecustomerhasloginExplore/index.html">Explore</a></li>
          
          <li class="dropdown"><a href="#"><span><img src="assets/img/menu/icon.jpg" style=" height:20px; width:20px;"></span></a>
            <ul>
              <li><a href="#">Notifications</a></li>
               <li>
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                  </x-responsive-nav-link>

               </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
              </li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    </header>
  
		  <!-- Uncomment below if you prefer to use an image logo -->
		  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	
	  <!-- ======= Header ======= -->
	  
	    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make Order</h2>
         
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/pri.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Printing Category</a>
              <span>
                <select name="Printing Category" id="dp">
                  <option value="">Digital Printing</option>
                  <option value="">Large Format Printing</option>
                  <option value="">Fabric Printing</option>
                  <option value="">Laser Engraving</option>
                  <option value="">Sublimation</option>
                  <option value="">Embroidery</option>
                </select>
              </span>
            </div>
           
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Printing Type</a>
              <span>
                <select name="Printing Category" id="dp">
                  <option value="">Fliers</option>
                  <option value="">Bronchures</option>
                  <option value="">Bussiness Cards</option>
                  <option value="">ID Cards</option>
                  <option value="">Calenders</option>
                  <option value="">Banner</option>
                  <option value="">Books</option>
                  <option value="">Bags</option>
                  <option value="">Cups</option>
                  <option value="">T-shirt</option>
                </select>
              </span>
            </div>
           
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Material</a>
              <span>
                <select name="Printing Category" id="dp">
                  <option value="">Plain Paper</option>
                  <option value="">Matte Paper</option>
                  <option value="">Gloss Paper</option>
                  <option value="">Sticker</option>
                  <option value="">Banner</option>
                  <option value="">Bag</option>
                  <option value="">Cup</option>
                  <option value="">T-shirt</option>
                </select>
              </span>
                
              
            </div>
            </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Weight(g)</a>
              <span>
                <select name="Printing Category" id="dp">
                  <option value="">60</option>
                  <option value="">70</option>
                  <option value="">80</option>
                  <option value="">100</option>
                  <option value="">135</option>
                  <option value="">200</option>
                  <option value="">250</option>
                  <option value="">300</option>
                  <option value="">350</option>
                </select>
              </span>
            </div>
            </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Size</a>
              <span>
                <select name="Printing Category" id="dp">
                  <option value="">A0</option>
                  <option value="">A1</option>
                  <option value="">A2</option>
                  <option value="">A3</option>
                  <option value="">A4</option>
                  <option value="">A5</option>
                </select>
              </span>
            </div>
            </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Number of copies</a>
              <span>
                <select name="Printing Category" id="dp">
                <option value="">100</option>
                <option value="">200</option>
                <option value="">300</option>
                <option value="">400</option>
                <option value="">500</option>
             </select>
             </span>
             
                </div>
              </span>
            </div>
            
          </div>

          
         
          <div class="col-lg-6 menu-item filter-specialty">
           
            
            <div class="lower">
            <div class="menu-ingredients">
             
             <form>
              <label for="fileUpload">
                <div class="lower">
                <p>Upload a File:</p>
              </div>
            </label>
              <input type="file" id="fileUpload" name="fileUpload">
            </form> 
             </div>    
            </div>
            <div>
              <div class="col-lg-6 menu-item filter-specialty">
              <div class="lower">
              <div class="btns" >
               <a href="#menu" class="btn-menu" >Cancel</a>
                <a href="finish.html" class="btn-book animated fadeInUp scrollto">Finish</a>
                </div>
                </div>
              </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>
          </div>
          
        </div>

      </div>
    </section><!-- End Events Section -->

   

  </main><!-- End #main -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

