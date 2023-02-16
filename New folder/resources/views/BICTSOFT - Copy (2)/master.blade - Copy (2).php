<?php 


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>A R Properties & Developers </title>
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

<?php 


if (App::isLocale('en'))
{ ?>

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
                <option value="{{$price->price}}" >{{$price->price}} Taka</option>
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
  
<?php }  

if (App::isLocale('bn')) { ?>


 <div class="box-collapse">

    <div class="title-box-d">
      <h3 class="title-d">প্রপার্টিজ খুজেন </h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
 
 <form method="post" action="{{ route('serachpage') }}">
                        @csrf
        <div class="row">
         
      
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">লোকেশন </label>
              <select class="form-control form-control-lg form-control-a" name="city" id="city">
                <option value="">সব লোকেশন দেখান </option>
              @foreach ($searchlocation as $location)
                <option value="{{$location->adress_line2}}" >{{$location->adress_line2}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">আয়তন অনুসারে  </label>
              <select class="form-control form-control-lg form-control-a" name="area" id="bedrooms">
                <option value="" >সব সাইজের প্লট দেখান  </option> 
               @foreach ($searcharea as $area)
                <option value="{{$area->area}}" >{{$area->area}}একর </option>
                @endforeach
              </select>
            </div>
          </div> 

 
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price"> মূল্য অনুসারে </label>
              <select class="form-control form-control-lg form-control-a" name="price" id="price">
                <option value="">সব রকমের মূল্যের দেখান </option>
				@foreach ($searchprice as $price)
                <option value="{{$price->price}}" >{{$price->price}} টাকা </option>
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
  
<?php } ?>










  <!--/ Form Search End /-->

  <!--/ Nav Star /-->

  <nav   class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">


   <div class="container">
   
       	 	  	<div style="margin-top:-100px; margin-left:-100px; " >
<a style="color:red;" href="{{route('locale','en')}}">English</a> 
<a  style="color:green;" href="{{route('locale','bn')}}">বাংলা </a>
</div> 


<span></span>
<?php 
if (session('session_key')=='en')
{ ?>
 
 
	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
     <a class="navbar-brand text-brand" href="/"> <span style="color:red;font-weight:bold; ">A R Properties</span> <br> <span  class="color-b">& Developers</span></a> 
     



	 <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
         		  <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('/') }}">{{ __('Home') }}</a>
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('aboutpage') }}">{{ __('About') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('property-grid') }}">{{ __('Properties') }}</a>
</li>




		  <li class="nav-item {{ request()->is('contactpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('contactpage') }}">{{ __('Contact') }}</a>
</li>
          
        
	        <li class="nav-item dropdown {{ request()->is('servicepage') ? 'active' : ''}}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Service
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			 @foreach ($service as $serv)
			<a class="dropdown-item " href="{{ url('servicepage')}}\{{ $serv->id }}">{{ __($serv->service_name) }}</a>
         
              
           @endforeach

		   </div>
          </li>	
	  

<?php 
if (Auth::check()) { ?>
		
		
 
		
		 <li class="nav-item"  style="margin-left:120px;"  >
            <a class="nav-link" href="{{url('logout')}}">Logout</a>
          </li>
		
	
	
 <?php 
 }


	
	else {
			  
			  
			  ?>
			  
			  

		  <li class="nav-item"  style="margin-left:120px;"  >
            <a class="nav-link" href="{{url('login')}}">Login</a>
          </li>
		  
		  
		  <li class="nav-item"  style="margin-left:20px;"  >
            <a class="nav-link" href="{{url('register')}}">Registration</a>
          </li>
       
 <?php  }  ?>


	   </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    
<?php }  

// ------------------------------------------------------------- For Bangla translation-------------------------------------------------------------



else { ?>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
      <a class="navbar-brand text-brand" href="/"> <span style="color:red;font-weight:bold">এ আর প্রপার্টিজ  <br><span class="color-b">এন্ড ডেভোলপারস</span></a>
     



	 <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
         		  <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('/') }}">{{ __('হোম ') }}</a>
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('aboutpage') }}">{{ __('এবাউট ') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('property-grid') }}">{{ __('প্রপার্টিজ ') }}</a>
</li>




		  <li class="nav-item {{ request()->is('contactpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('contactpage') }}">{{ __('যোগাযোগ  ') }}</a>
</li>
          
        
	        <li class="nav-item dropdown {{ request()->is('servicepage') ? 'active' : ''}}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              সার্ভিস 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			 @foreach ($service as $serv)
			<a class="dropdown-item " href="{{ url('servicepage')}}\{{ $serv->id }}">{{ __($serv->bnservice_name) }}</a>
         
              
           @endforeach

		   </div>
          </li>	
	  

<?php 
if (Auth::check()) { 





?>
		
		
 
		
		 <li class="nav-item"  style="margin-left:120px;"  >
            <a class="nav-link" href="{{url('logout')}}">লগ আউট </a>
          </li>
		
	
	
 <?php 
 }


	
	else {
			  
			  
			  ?>
			  
			  

		  <li class="nav-item"  style="margin-left:120px;"  >
            <a class="nav-link" href="{{url('login')}}">লগইন </a>
          </li>
		  
		  
		  <li class="nav-item"  style="margin-left:20px;"  >
            <a class="nav-link" href="{{url('register')}}">রেজিস্ট্রেশন </a>
          </li>
       
 <?php  }  ?>


	   </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
	  
	  
<?php  } ?>






	
	
	
	
	</div>
  </nav>
  @show
  <!--/ Nav End /-->
  
  <div class="container"> 
    @yield('body')
</div>
  
   <!--/ footer Star /-->
   
 @section('footer')  
 


	
<?php 


if (App::isLocale('en'))
{ ?>


 @foreach($contact as $cont )
 

<h2 style="float:right;position:fixed;bottom:430px;color:red;font-family:New Times Roman;right:0px; font-size:30px;"> Chat</h2><br>             
 <a style="float:right;position:fixed;bottom:400px;right:0px;" href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > <img src="{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a> 


@endforeach



<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand"><span >AR</span> Properties</h3>
            </div>
		@foreach($about as $about )
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
			  {{$about->slogan_2}}
              </p>
            </div>
			@endforeach
			
			@foreach($contact as $contact )
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a"> Mobile No : {{$contact->mobile}} .</span> </li>
                <li class="color-a">
                  <span class="color-text-a">Email: {{$contact->email}} .</span></li>
              </ul>
            </div>
			
			
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
         
        
		
		</div>
       



	   <div class="col-sm-12 col-md-4 section-md-t3">
          
		  <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quick Site Link</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="/">Home</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('aboutpage') }}">About</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('property-grid') }}">properties</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('contactpage') }}">Contact</a>
                </li>
           
              </ul>
            </div>
          </div>
       










	   </div>
     


	 </div>
    </div>
  </section>
  <footer>
  
  <style>
#fc {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
 
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}


</style>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <h3 style="color: green">Our Social Sites</h3>
		
          <div class="socials-a">
            <a href="{{$contact->facebook}}" id="fc" class="fa fa-facebook"></a>

         <a href="{{$contact->youtube}}" id="fc" class="fa fa-youtube"></a>
         <a href="{{$contact->instragram}}" id="fc" class="fa fa-instagram"></a>
		 @endforeach
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a" >A R Properties & Developers</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="{{asset('https://bictsoft.tk/')}}">BICTSOFT Limited Company </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
<?php } else { ?>

 @foreach($contact as $cont )
 

<h2 style="float:right;position:fixed;bottom:430px;color:red;font-family:New Times Roman;right:0px;"> চ্যাট </h2><br>  
 <a style="float:right;position:fixed;bottom:400px;right:0px;"  href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > <img src= "{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a> 


@endforeach

<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand"> এ আর প্রপার্টিজ এন্ড ডেভোলপারস </h3>
            </div>
		@foreach($about as $about )
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
			  {{$about->bnslogan_2}}
              </p>
            </div>
			@endforeach
			
			@foreach($contact as $contact )
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a"> মোবাইল নং : {{$contact->mobile}} .</span> </li>
                <li class="color-a">
                  <span class="color-text-a">ইমেইল : {{$contact->email}} .</span></li>
              </ul>
            </div>
			
			
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
         
        
		
		</div>
       



	   <div class="col-sm-12 col-md-4 section-md-t3">
          
		  <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quick Site Link</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="/">হোম </a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('aboutpage') }}">এবাউট </a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('property-grid') }}">প্রপার্টিজ</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="{{ url('contactpage') }}">যোগাযোগ </a>
                </li>
           
              </ul>
            </div>
          </div>
       










	   </div>
     


	 </div>
    </div>
  </section>
  <footer>
  
  <style>
#fc {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
 
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}


</style>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <h3 style="color: green">Our Social Sites</h3>
		
          <div class="socials-a">
            <a href="{{$contact->facebook}}" id="fc" class="fa fa-facebook"></a>

         <a href="{{$contact->youtube}}" id="fc" class="fa fa-youtube"></a>
         <a href="{{$contact->instragram}}" id="fc" class="fa fa-instagram"></a>
		 @endforeach
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a" >A R Properties & Developers</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="{{asset('https://bictsoft.tk/')}}">BICTSOFT Limited Company </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php } ?>

  
  
  
  
  
  
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
@show
