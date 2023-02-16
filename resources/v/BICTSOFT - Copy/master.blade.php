<?php 


use Illuminate\Support\Facades\Auth;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>A R Properties</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Libraries CSS Files -->
   <!-- Libraries CSS Files -->
  <link href="{{asset ('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset ( 'lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset ( 'lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset ('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <style>
  .card-img-top{
	  height : 450px;
	  width:100%;
	  object-fit:cover;
	  
  }
  

  
  .owl-prev{
	 left: -30px; 
  }
  
  .owl-next{
	right: -30px;  
  }
  
  .owl-prev , .owl-next {
	  position:absolute;
	  top:90px;
	  
  }
  .owl-prev span, .owl-next span {
	  
	  font-size:88px;
	  color:black;
  }
  
  .owl-theme , .owl-nav[class "="owl-"]:hover{
	  
	  background : transparent;
  }
  
  
  

  
  
  

  
  
  
 



  </style>

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
@section('navbarandsearch')
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
 


 <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
 
 <form method="POST" action="{{ route('serachpage') }}">
                        @csrf
        <div class="row">
         
      
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Location</label>
              <select class="form-control form-control-lg form-control-a" name="city" id="city">
                <option value="">All City</option>
              @foreach ($searchlocation as $location)
                <option value="{{$location->adress_line2}}" >{{$location->adress_line2}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Plot Size</label>
              <select class="form-control form-control-lg form-control-a" name="area" id="bedrooms">
                <option value="" >Any</option>
                @foreach ($searcharea as $area)
                <option value="{{$area->area}}" >{{$area->area}}</option>
                @endforeach
              </select>
            </div>
          </div>

 
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price"> Price</label>
              <select class="form-control form-control-lg form-control-a" name="price" id="price">
                <option value="">Any</option>
				@foreach ($searchprice as $price)
                <option value="{{$price->price}}" >{{$price->price}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
      <a class="navbar-brand text-brand" href="Arp"> <span style="color:red;font-weight:bold"> A R</span> <span class="color-b">Properties</span></a>
     



	 <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutpage">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid">Property</a>
          </li>
		  
		            <li class="nav-item">
            <a class="nav-link" href="contactpage">Contact</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Service
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			 @foreach ($service as $serv)
			
              <a class="dropdown-item" href="{{asset('servicepage')}}\{{ $serv->id }}">{{$serv->service_name}}</a>
              
           @endforeach

		   </div>
          </li>
<?php 
if (Auth::check()) { ?>
		
		
		 <li class="nav-item"  style="margin-left:20px;"  >
            <a class="nav-link" href="logout">Logout</a>
          </li>
		
	
	
<?php 	}


	
	else {
			  
			  
			  ?>
		  <li class="nav-item"  style="margin-left:130px;"  >
            <a class="nav-link" href="login">Login</a>
          </li>
		  
		  <li class="nav-item"  style="margin-left:20px;"  >
            <a class="nav-link" href="register">Registration</a>
          </li>
       
	<?php  }  ?>


	   </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  @show
  <!--/ Nav End /-->
  
  <div class="container"> 
    @yield('body')
</div>
  
   <!--/ footer Star /-->
   
 @section('footer')  
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">EstateAgency</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  

  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  
 <script>
 $(document).ready(function(){
$(".owl-carousel").owlCarousel({
   
    loop:true,

    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
	nav:true,
	lazyLoad:true,
	margin:10,
	padding:5,
	stagePadding:5,
	
	 responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
			
        },
        485:{
            items:2,
            nav:true,
			
        },
        728:{
            items:3,
            nav:true,
			
           
        }
    }
	
});
 })
</script>

  
  <!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
   <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
@ahow
