<?php 


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
 @foreach($sitedescription as $site1 )  
  
  <title>{{$site1->siteicontitle}} </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="{{$site1->metanmae}}" name="keywords">
  <meta content="{{$site1->metadescription}}" name="description">

  
  <!-- Favicons -->



      
 <link href="{{url('/image')}}/{{$site1->favicon}}" rel="icon" >
     <link href="{{url('/image')}}/{{$site1->appletouchicon}}" rel="apple-touch-icon">
  
  @endforeach 

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
   <link rel="{{asset('stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

  <!-- Main Stylesheet File -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
<!-- Style for owl cusoul  File --> 
  <style>
  .card-img-top{
	  height : 200px;
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
  
  
  


 			
<!------------------------------------------------------ Style for language switcher --------------------------------------->


				
 



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
 
 
 
 <!------------------------------------------------- Language Switcher ---------------------------------------------------->
  
<style>
#rcorners2 {
  border-radius: 20px;
  border: 2px solid #73AD21;
  padding: 10px; 
  width: 90px;
  height: 40px; 
  color:red;
  background:#D1D685;
    float:right;
  position:fixed;
  bottom:50px;
  
 

}


</style>

 
 	
 
  










<!------------------------------------------------------ End Language Switcher ---------------------------------------->





  <!--/ Form Search Star /-->

<?php 

/////////////////////////////////////////// search for English //////////////////////////////////////////////////////////////
if (App::isLocale('en'))
{ ?>










 <div style="margin-left:20px;  " class="box-collapse"> 

    <div class="title-box-d">  
      <h3 class="title-d">Searching Property</h3>
    </div>
    <span         class="close-box-collapse right-boxed  "> ×  </span>
    
	 
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
                <option value="{{$location->searchlocation}}" >{{$location->searchlocation}}</option>
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
                <option value="{{$area->area}}" >{{$area->area}} Decimal</option>
                @endforeach
              </select>
            </div>
          </div>

 
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price"> Price</label>
              <select class="form-control form-control-lg form-control-a" name="price" id="price">
                <option value="">Any</option>
				
                <option value="1" > 0 to 5 Lakh Taka per Decimal </option>
				 <option value="500000" > 5 Lakh 1 Taka to 10 Lakh per Decimal </option>
				  <option value="1000000" >10 Lakh 1 Taka to 15 Lakh per Decimal </option>
				   <option value="1500000" >15 Lakh 1 Taka to 20 Lakh per Decimal </option>
				    <option value="2000000" >20 Lakh 1 Taka to 25 Lakh per Decimal </option>
					 <option value="2500000" >25 Lakh 1 Taka t0 30 Lakh per Decimal </option>
					 <option value="3000000" >30 Lakh 1 Taka t0 35 Lakh per Decimal </option>
					 <option value="3500000" >Greater than 35 per Decimal </option>
               
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




///////////////////////////////////////////////////////////////////////// Search for Bangla ///////////////////////////////////////////////////////




if (App::isLocale('bn')) { ?>


 <div class="box-collapse">

    <div class="title-box-d">
      <h3 class="title-d"> প্রকল্প  খুজেন </h3>
    </div>
    <span class="close-box-collapse right-boxed ">  ×  </span>
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
                <option value="{{$location->searchlocation}}" >{{$location->searchlocation}}</option>
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
                <option value="{{$area->area}}" >{{$area->area}}শতক </option>
                @endforeach
              </select>
            </div>
          </div> 

 
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price"> মূল্য অনুসারে </label>
              <select class="form-control form-control-lg form-control-a" name="price" id="price">
                <option value="">সব রকমের মূল্যের দেখান </option>
                <option value="1" > ০ থেকে ৫ লক্ষ টাকা/ শতক  </option>
				 <option value="500000" > ৫ লক্ষ ১ টাকা থেকে ১০ লক্ষ টাকা/শতক  </option>
				  <option value="1000000" >১০ লক্ষ ১ টাকা থেকে ১৫ লক্ষ টাকা/শতক  </option>
				   <option value="1500000" >১৫ লক্ষ ১ টাকা থেকে ২০ লক্ষ টাকা/শতক  </option>
				    <option value="2000000" >২০ লক্ষ ১ টাকা থেকে ২৫ লক্ষ টাকা/শতক  </option>
					 <option value="2500000" >২৫ লক্ষ ১ টাকা থেকে ৩০ লক্ষ টাকা/শতক  </option>
					 <option value="3000000" >৩০ লক্ষ ১ টাকা থেকে ৩৫ লক্ষ টাকা/শতক  </option>
					 <option value="3500000" >৩৫ লক্ষের উপরে  </option>
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






<!----------------------------------------------------------------------------------------- End search section ------------------------------------ >



  <!--/ Form Search End /-->

  <!------------------------------------------------------------------------/ Nav Star /----------------------------------------------------------->

  <nav id="nav"   class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">





<!---------------------------------------------------------------- Navigation for English  ---------------------------------------------------------->



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
	  
<!------------       For logo  ------------------->	
     @foreach($sitedescription as $site2 )
	 <a class="navbar-brand text-brand" href="/"> 
	   
	<img style="margin-left:20px;" width="200px;" height="100px;" src="{{url('/image')}}/{{$site2->appletouchicon}}" >
	
	
	
	</a> 
     
@endforeach





	 <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa  " aria-hidden="true">      
<img style="width:20px; width:20px;" src="{{url('image/searchicon.png')}}" >

		</span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
         		  <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
    <a     class="nav-link " href="{{ url('/') }}">{{ __('Home') }}</a>
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a       class="nav-link " href="{{ url('aboutpage') }}">{{ __('About') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a      class="nav-link " href="{{ url('property-grid') }}">{{ __('Projects') }}</a>
</li>




		  <li class="nav-item {{ request()->is('contactpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('contactpage') }}">{{ __('Contact') }}</a>
</li>
          
        
	        <li                     class="nav-item dropdown {{ request()->is('servicepage') ? 'active' : ''}}">
            <a          class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Service
            </a>
            <div     class="dropdown-menu" aria-labelledby="navbarDropdown">
			 @foreach ($service as $serv)
			<a     class="dropdown-item " href="{{ url('servicepage')}}\{{ $serv->id }}">{{ __($serv->service_name) }}</a>
         
              
           @endforeach

		   </div>
          </li>	
	
	<!---------------------------------------------------------------- Authentication check for Login. Registration and Log out Button  ---------------------------------------------------------->  

<?php 
if (Auth::check()) { ?>
		
		
 <?php 
 
 
 		if (Auth::user()->is_admin==1 )
{ ?>


 <li class="nav-item"  style="margin-left:100px;"  >
            <a class="nav-link" href="{{route('admin.home')}}">Admin </a>
          </li>

	
<?php }
 ?>
 
		
		 <li class="nav-item"    >
            <a class="nav-link" href="{{url('logout')}}">Logout</a>
          </li>
		
	
	
 <?php 
 }


	
	else {
			  
			  
			  ?>
			  
			  
          
		 


	    
			
 <li class="nav-item"  style="margin-left:120px;"  >
           <a  class="nav-link" href="{{url('login')}}">Login</a>
		   </li>
		   
		    <li class="nav-item"  >
		    <a  class="nav-link" href="{{url('register')}}">Registration</a>
             </li> 
         






       
 <?php  }  ?>

<!---------------------------------------------------------------- End Authentication check  ---------------------------------------------------------->
	


	</ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
<span  aria-hidden="true"> <img style="width:20px; width:20px;" src="{{url('image/searchicon.png')}}" >  </span>
      </button>
    
<?php }  







// ------------------------------------------------------------- For Bangla Navigation -------------------------------------------------------------



else { ?>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
       @foreach($sitedescription as $site2 )
	 <a class="navbar-brand text-brand" href="/"> 
	   
	<img style="margin-left:20px;" width="200px;" height="100px;" src="{{url('/image')}}/{{$site2->appletouchicon}}" >
	
	
	
	</a> 
     
@endforeach



	 <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa  " aria-hidden="true">      
<img style="width:20px; width:20px;" src="{{url('image/searchicon.png')}}" >

		</span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
         		  <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('/') }}">{{ __('হোম ') }}</a>
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('aboutpage') }}">{{ __('সম্বন্ধে ') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('property-grid') }}">{{ __('প্রকল্প ') }}</a>
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

<!---------------------------------------------------------------- Authentication check  ---------------------------------------------------------->	  

<?php 
if (Auth::check()) 
		
 { ?>
 
 <?php 
 
 
 		if (Auth::user()->is_admin==1 )
{ ?>


 <li class="nav-item"  style="margin-left:10px;"  >
            <a class="nav-link" href="{{route('admin.home')}}">এডমিন </a>
          </li>

	
<?php }
 ?>
 
		
		 <li class="nav-item"    >
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

<!---------------------------------------------------------------- End Authentication Check  ---------------------------------------------------------->
	   </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span  aria-hidden="true"> <img style="width:20px; width:20px;" src="{{url('image/searchicon.png')}}" >  </span>
      </button>
	  
	  
<?php  } ?>






	
	
	
	
	</div>
  </nav>
  

  @show
  <!--------------------------------------------------------------------------/ Nav End /----------------------------------------------------------------->
  
  <div class="container"> 
    @yield('body')
</div>
  
   <!------------------------------------------------------------------/ footer Startt /-------------------------------------------------------------->
   
 @section('footer')  
 


	
<?php 

/////////////////////////////////////////////////////////////////////////footer Start for English//////////////////////////////////////////////////////


if (App::isLocale('en'))
{ ?>


  <!-------------------------------------------------------------------- WhatsApp Chat English  ------------------------------------------------------>


 @foreach($contact as $cont )


 <a style="float:right;position:fixed;bottom:250px;right:10px;"  href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > 
 <img style="margin-top:20px;" src= "{{asset('image\message .PNG')}}"> <img src= "{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a>

</a>
@endforeach


<a style="float:right;position:fixed;bottom:150px;right:10px;"    href="{{route('locale','bn')}}"><img src= "{{asset('image/bangla.png')}}" width="90px" height="40px" class="whatsapp_float_button"   ></a> 




 
<!-------------------------------------------------------------------- WhatsApp Chat English End  ------------------------------------------------------>





  <footer>
  
 

@foreach($contact as $contact )

    <div class="container">
      <div class="row">
	  
	  
	
	  
	  
	  
        <div class="col-md-12">
         <h3 style="color: green"> Contact Us: </h3>
		

		
		
          <div class="  d-flex flex-column    socials-a">
		  
		  
		  		              
 
           

		   
		   <div>
          <a href="{{$contact->facebook}}"  ><img style="height:50px;width:50px;" src="{{url('image/facebookicon.svg')}}" ></a>

         <a href="{{$contact->youtube}}" > <img style="height:50px;width:50px;" src="{{url('image/Youtube.png')}}" > </a>
         <a href="{{$contact->instragram}}" ><img style="height:50px;width:50px;" src="{{url('image/instragram.svg')}}" ></a>
		 
		 </div>
		 
		 
		 		  <div>
		       Mobile NO :<a  href="tel:{{ $contact->mobile}}"> {{$contact->mobile}} </a>
		   Email :<a  >  {{$contact->email}}  </a>
		   
		   </div>
		 
		 
		 
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
  
<?php } 





/////////////////////////////////////////////////////////////////Footer for Bangla//////////////////////////////////////////////////////////////////




else { ?>
 
<!-------------------------------------------------------------------- WhatsApp Chat Bangla  ------------------------------------------------------>

 
 @foreach($contact as $cont )


 <a style="float:right;position:fixed;bottom:250px;right:10px;"  href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > 
 <img style="margin-top:20px;" src= "{{asset('image\message .PNG')}}">  <img src= "{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a>

</a>
@endforeach

<a style="float:right;position:fixed;bottom:100px;right:10px;"    href="{{route('locale','en')}}"><img src= "{{asset('image/english.jpg')}}" width="90px" class="whatsapp_float_button"   ></a> 



<!----------------------------------------------------------- End Whatsapp Chat Bangla -------------------------->
 

<!-------------------------------------------------------------------- WhatsApp Chat Bangla End  ------------------------------------------------------>



  <footer>
  
@foreach($contact as $contact )

    <div class="container">
      <div class="row">
	  
	  
	
	  
	  
	  
        <div class="col-md-12">
         <h3 style="color: green"> যোগাযোগ মাধ্যম </h3>
		

		
		
          <div class="  d-flex flex-column    socials-a">
		  
		  
		  		              
 
           

		   
		   <div>
          <a href="{{$contact->facebook}}"  ><img style="height:50px;width:50px;" src="{{url('image/facebookicon.svg')}}" ></a>

         <a href="{{$contact->youtube}}" > <img style="height:50px;width:50px;" src="{{url('image/Youtube.png')}}" > </a>
         <a href="{{$contact->instragram}}" ><img style="height:50px;width:50px;" src="{{url('image/instragram.svg')}}" ></a>
		 
		 </div>
		 
		 
		 		  <div>
		       মোবাইল নং :<a  href="tel:{{ $contact->mobile}}"> {{$contact->mobile}} </a>
		   ইমেইল :<a  >  {{$contact->email}}  </a>
		   
		   </div>
		 
		 
		 
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

 

<!-------------------------------------------------------- Language Switcher ----------------------------------------------> 
 

  
  
<!------------------------------------------------------------------------- End Language Switcher ------------------------------------->
  
  
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  

  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
 


  <!-- Script for  owl cursoul -->
 
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
