
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
  <style>
    button{
      background-color: #0c0b09;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;
}

button:hover
 {
  background: #cda45e;
  color: #fff;
}

textarea{
  background: black;
  border-radius: 10px;
  border: 2px solid #cda45e;
  color:#cda45e;
  width:600px;
  height:100px;
}

 

.previous-link {
  display: inline-block;
  text-decoration: none;
  margin-right:950px;
}

.circle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border:2px solid #cda45e;
  background-color:black;
  transition: background-color 0.3s;
}

.circle:hover {
  background-color: #cda45e;
}

.arrow {
  display: inline-block;
  width: 0;
  height: 0;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-right: 6px solid #cda45e;
  transition: border-right-color 0.3s;
}

.circle:hover .arrow {
  border-right-color: black;
}

.image-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(1200px, 1fr));
  grid-gap: 10px;
}
  

.image-item {
  display: flex;
  justify-content: center;
  align-items: center;
}


.image-img{
  height:700px; 
  width:700px;
  border-radius: 10%;
  
}



  </style>

<body>
    <header id="header" class="d-flex align-items-center" style="background: rgba(25, 25, 25, 0.95);">
		<div class="container d-flex align-items-center justify-content-between">
	
		  <h1 class="logo"><a href="index.html"></a></h1>
		  <!-- Uncomment below if you prefer to use an image logo -->
		  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	
	  <!-- ======= Header ======= -->
	  <nav id="navbar" class="navbar" style="margin-left:-100px;">
        <ul>

          <a href="{{ url()->previous() }}" class="previous-link">
            <div class="circle">
              <span class="arrow"></span>
            </div>
          </a>
          <li><a class="nav-link scrscrolltoollto" href="{{ url()->previous()}}">Order</a></li>
          <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
          
          <li><a class="nav-link scrollto active" href="{{ ('customerExplore')}}">Explore</a></li>
          
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

    
      
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 menu-item filter-starters">
                <h2 style="color:white;">Explore Our Designs</h2>
            
                
                  @if (count($images) > 0)
                  <div class="image-list">
                  @foreach ($images as $image)
                   <div class="image-item"> 
                    
                    <img src="{{ asset('images/' . $image->filename) }}" class="image-img" alt="Image">
                      
                        </div>
                  @endforeach
              
            </div>
          @else
              <p style="color:white;">No images uploaded yet.</p>
          @endif
                </div>
          </div>
      </div>
    </div>
    <div>
  
		
      
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

