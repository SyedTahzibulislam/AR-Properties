
<?php 
use Illuminate\Routing\UrlGenerator;
  use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

?>
<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <title>A R Properties & Developers</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<meta property="og:url"           content=  "<?php echo url()->current(); ?>" />
<meta property="og:type"          content="" />
<meta property="og:title"         content="" />
<meta property="og:description"   content="" />
<meta property="og:image"         content="{{asset ('/image')}}/{{ $eventcration->image }}" />

  <!-- Favicons -->

 @foreach($sitedescription as $site1 )  
 <link href="{{url('/image')}}/{{$site1->favicon}}" rel="icon" >
     <link href="{{url('/image')}}/{{$site1->appletouchicon}}" rel="apple-touch-icon">
  @endforeach 

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset ('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset ( 'lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset ( 'lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset ('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  
  
    <style>
    .card-img-top{
	  height : 350px;
	  width:100%;
	  object-fit:cover;
	  
  }
  
  
.carousel-item-b img {
  width: 100%;
  height: auto;
}
</style>

</head>

<body>

  <div class="click-closed"></div>
  
  




<!------------------------------------------------------ End Language Switcher ---------------------------------------->

  <!--/ Form Search Star /--> 
 <?php  
  if (App::isLocale('bn')) 
{ ?>
  <div class="box-collapse">

    <div class="title-box-d">
      <h3 class="title-d">প্রকল্প  খুজেন </h3>
    </div>
    <span class="close-box-collapse right-boxed ">  ×  </span>
    <div class="box-collapse-wrap form">
 
 <form method="POST" action="{{ route('serachpage') }}">
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
                <option value="{{$area->area}}" >{{$area->area}} শতক  </option>
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
            <button type="submit" class="btn btn-b">খুজুন </button>
          </div>
        </div>
      </form>
    </div>

  </div>
  
  
   <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">

	
	
	
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
     <!-- <a class="navbar-brand text-brand" href="\"> <span style="color:red;font-weight:bold"> এ আর প্রপার্টিজ </span><br><span class="color-b">এন্ড ডেভোলপারস </span></a>
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
         		  <li class="nav-item {{ request()->is('Arp') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('/') }}">{{ __('হোম ') }}</a> 
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('aboutpage') }}">{{ __('সম্বন্ধে ') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('property-grid') }}">{{ __('প্রকল্প') }}</a>
</li>




		  <li class="nav-item {{ request()->is('contactpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('contactpage') }}">{{ __('যোগাযোগ ') }}</a>
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
if (Auth::check()) { ?>
		
		
 
		
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
<span  aria-hidden="true"> <img style="width:20px; width:20px;" src="{{url('image/searchicon.png')}}" >  </span>
      </button>
    </div>
  </nav>
  


  
<?php } else { ?>

 <div class="box-collapse">

    <div class="title-box-d">
      <h3 class="title-d">Search Projects</h3>
    </div>
    <span class="close-box-collapse right-boxed ">  × </span>
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
            <button type="submit" class="btn btn-b">Search Projects</button>
          </div>
        </div>
      </form>
    </div>

  </div>
  
  
  
   <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
	

	
	
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
	  
	
  <!--    <a class="navbar-brand text-brand" href="\"> <span style="color:red;font-weight:bold"> A R Properties</span><br><span class="color-b"> & Developers</span></a>
     -->
<!-- LOGO -->
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
         		  <li class="nav-item {{ request()->is('Arp') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('/') }}">{{ __('Home ') }}</a> 
</li> 
         
		  <li class="nav-item {{ request()->is('aboutpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('aboutpage') }}">{{ __('About ') }}</a>
</li> 

		  <li class="nav-item {{ request()->is('property-grid') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('property-grid') }}">{{ __('Projects ') }}</a>
</li>




		  <li class="nav-item {{ request()->is('contactpage') ? 'active' : ''}}">
    <a class="nav-link " href="{{ url('contactpage') }}">{{ __('Contact ') }}</a>
</li>
          
        
	        <li class="nav-item dropdown {{ request()->is('servicepage') ? 'active' : ''}}">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Services
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
            <a class="nav-link" href="{{url('logout')}}">Logout </a>
          </li>
		
	
	
 <?php 
 }


	
	else {
			  
			  
			  ?>
			  
			  

		  <li class="nav-item"  style="margin-left:120px;"  >
            <a class="nav-link" href="{{url('login')}}">Login </a>
          </li>
		  
		  
		  <li class="nav-item"  style="margin-left:10px;"  >
            <a class="nav-link" href="{{url('register')}}">Registration</a>
          </li>
       
 <?php  }  ?>


	   </ul>
      </div>
     <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span  aria-hidden="true"> <img style="width:20px; width:20px;" src="{{ url ('image/searchicon.png') }}" >  </span>
      </button>
    </div>
  </nav>
  





<?php } ?>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->

 








 <!--/ Nav End /-->
  <?php 


if (App::isLocale('en'))
{ ?>
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 id="carousel_id" class="title-single">{{$eventcration->title}}</h1>
        
          </div>
        </div>
     
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  
  
  <section  class="property-single nav-arrow-b" >
    <div class="container">
      <div class="row">
        <div  class="col-sm-12">
                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            
			<?php if ($eventcration->image != null ){ ?>
			<div class="carousel-item-b">
             <img  src="/image/{{ $eventcration->image }}" alt="A R Properties & Developers"> 
            </div>
			
			<?php } if ($eventcration->image1 != null ){ ?>
            <div class="carousel-item-b">
             <img  src="/image/{{ $eventcration->image1 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image2 != null ){ ?>
            <div class="carousel-item-b">
            <img  src="/image/{{ $eventcration->image2 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image3 != null ){    ?>

			  <div class="carousel-item-b">
			  
            <img  src="/image/{{ $eventcration->image3 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image4 != null ){ ?>
						  <div class="carousel-item-b">
            <img  src="/image/{{ $eventcration->image4 }}" alt="A R Properties & Developers">
            </div>
			<?php } ?>
			
			
			
          </div>
        	   

          <div class="row justify-content-between">
           


						
			
			
			
			
            <div class="col-md-10 col-lg-10 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d"> Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
				
								{!! nl2br(e($eventcration->description)) !!}	
			
                </p>
                
              </div>
           
         
            </div>
          </div>
        </div>
       






	
<!-- Contact Agent 
	   <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          <div class="row">
            
			

<div class="col-md-4   "  >           
 <div class="col-md-12 border  border-primary"  >
 <?php /* if ($t ) { ?>
  <img style="margin-top:13px;"  src="/image/{{ $t->image }}"  class="card-img-top " alt="" >

  <h2 style="text-align:center ; color:blue" >{{$t->name}}</h2>

  <p class="title" style="text-align:center; color:black;" ><b>{{$t->designation}}</b></p>

  <b style= " color:tomato; margin-left:60px " > Mobile NO:{{$t->mobile}} </b>

  <br> <b style= " color:tomato; margin-left:60px" > Email:{{$t->email}} </b>
	  <?php } */ ?>
  <br>
</div>
<br>

    </div>
	

	
    

           


		  	<!----------------------- send message ---------------------->
  
            <div class="col-md-8"> 
			<h1 style="text-align:center"> Send your message to us </h1>
        			    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif		   

 
				 
			   <form method="POST" action="{{ route('sendmessagepage') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
						
						<div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
						
						
						  <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="Title">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                            
                    <div class="form-group">
                      <textarea name="body" class="form-control" name="body" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ old('body') }} </textarea>
                      <div class="validation"></div>
                    </div>
                
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
			  
			
			
			</div>
		
			
			
			<!--- end send message       ------------------>  
         




		 </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

 
 
  <!-------------------------------------------------------------------- WhatsApp Chat English  ------------------------------------------------------>


 @foreach($contact as $cont )


 <a style="float:right;position:fixed;bottom:250px;right:10px;"  href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > 
 <img style="margin-top:20px;" src= "{{asset('image\message .PNG')}}"> <img src= "{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a>

</a>
@endforeach


<a style="float:right;position:fixed;bottom:150px;right:10px;"    href="{{route('locale','bn')}}"><img src= "{{asset('image/bangla.png')}}" width="90px" height="40px" class="whatsapp_float_button"   ></a> 

 
<!-------------------------------------------------------------------- WhatsApp Chat English End  ------------------------------------------------------>


 <!--/ footer Star /-->
 <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">AR Properties & Developers</h3>
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
                  > <a href="/">Home</a>
                </li>
                <li class="item-list-a">
               > <a href="{{ url('aboutpage') }}">About</a>
                </li>
                <li class="item-list-a">
                 > <a href="{{ url('property-grid') }}">Projects</a>
                </li>
                <li class="item-list-a">
                > <a href="{{ url('contactpage') }}">Contact</a>
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
         <h3 style="color: green">Our Social Sites</h3>
		
          <div class="socials-a">
 <a href="{{$contact->facebook}}"  ><img style="height:50px;width:50px;" src="{{url('image/facebookicon.svg')}}" ></a>

         <a href="{{$contact->youtube}}" > <img style="height:50px;width:50px;" src="{{url('image/Youtube.png')}}" > </a>
         <a href="{{$contact->instragram}}" ><img style="height:50px;width:50px;" src="{{url('image/instragram.svg')}}" ></a>
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
  <!--/ Footer End /-->

 
<a href="#"  class="back-to-top" > <img  style="height:50px; width:60px; float:right;position:fixed;bottom:10px;right:0px;" src="{{url('image/bottomtotop.png')}}"></a>
  <div id="preloader"></div>
  
<?php }  else { 


/////////////////////////////////////////////////BanglA///////////////////////////////////////////


 ?>
 
   <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 id="carousel_id" class="title-single">{{$eventcration->title}}</h1>

          </div>
        </div>
      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
             
            
			<?php if ($eventcration->image != null ){ ?>
			<div class="carousel-item-b">
             <img  src="/image/{{ $eventcration->image }}" alt="A R Properties & Developers"> 
            </div>
			
			<?php } if ($eventcration->image1 != null ){ ?>
            <div class="carousel-item-b">
             <img  src="/image/{{ $eventcration->image1 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image2 != null ){ ?>
            <div class="carousel-item-b">
            <img  src="/image/{{ $eventcration->image2 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image3 != null ){    ?>

			  <div class="carousel-item-b">
			  
            <img  src="/image/{{ $eventcration->image3 }}" alt="A R Properties & Developers">
            </div>
			<?php } if ($eventcration->image4 != null ){ ?>
						  <div class="carousel-item-b">
            <img  src="/image/{{ $eventcration->image4 }}" alt="A R Properties & Developers">
            </div>
			<?php } ?>
			
			
			
     

          </div>
          <div class="row justify-content-between">
           







        



         <div class="row justify-content-between">
           


						
			
			
			
			
            <div class="col-md-10 col-lg-10 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d"> বিবরণঃ </h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
				
								{!! nl2br(e($eventcration->description)) !!}	
			
                </p>
                
              </div>
           
         
            </div>
         












		</div>
        </div>
      


	  <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item ">
              <a class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                aria-selected="true">গুগল ম্যাপ </a> 
            </li>
			
			
			<li class="nav-item ">
              <a class="nav-link " id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                aria-controls="pills-video" aria-selected="true">ভিডিও </a>   
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                aria-selected="false">প্লট  প্লান </a>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
           
		   <!------------------------------------------------- Style for Youtube ---------------------------------> 


<!------------------------------------------------- Style for Youtube ---------------------------------> 



<!------------------------------------------------- Style for Youtube ---------------------------------> 
		




<!--	

	   <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">যোগাযোগ </h3> 
              </div>
            </div>
          </div>
          <div class="row">
            
			

 
<div class="col-md-4   "  >  

 <div class="col-md-12 border  border-primary"  >

 
 <?php /* if ($t ) {   ?>
 
  <img style="margin-top:13px;"  src="/image/{{ $t->image ?? 'None' }}   "  class="card-img-top " alt="" >

  <h2 style="text-align:center ; color:blue" >{{$t->bnname}}         </h2>

  <p class="title" style="text-align:center; color:black;" ><b>{{$t->bndesignation}}</b></p>

  <b style= " color:tomato; margin-left:60px " > Mobile NO:{{$t->mobile}} </b>

  <br> <b style= " color:tomato; margin-left:60px" > Email:{{$t->email}} </b>
	  <?php }  */?>
  <br>
</div>




<br>
    </div>
	

	
    

           


		  	<!----------------------- send message ---------------------->
  
              <div class="col-md-8"> 
			<h1 style="text-align:center"> আপনার প্রশ্ন আমাদের কাছে পাঠান  </h1>
        			    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif		   

 
				 
			   <form method="POST" action="{{ route('sendmessagepage') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('নাম ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
						
						<div class="form-group row">
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('মোবাইল নম্বর ') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						
						  <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('শিরোনাম ') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="Title">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('মেসেজ ') }}</label>

                            
                    <div class="form-group">
                      <textarea name="body" class="form-control" name="body" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ old('body') }} </textarea>
                      <div class="validation"></div>
                    </div>
                
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
			  
			
			
			</div>
			
			
			<!--- end send message       ------------------>  
         

		 
		 




		 </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

  <!--/ footer Star /-->
  
  <!-------------------------------------------------------------------- WhatsApp Chat Bangla  ------------------------------------------------------>


 @foreach($contact as $cont )

 
 <a style="float:right;position:fixed;bottom:250px;right:0px;"  href="https://wa.me/{{$cont->whatsappnumber}}?text={{$cont->whatsapptext}}" > <img style="margin-top:20px;"
 src= "{{asset('image\message .PNG')}}"> <img src= "{{asset('image\WhatsApp.svg.png')}}" width="50px" class="whatsapp_float_button"   >  </a> 


@endforeach

 
<a style="float:right;position:fixed;bottom:100px;right:10px;"    href="{{route('locale','en')}}"><img src= "{{asset('image/english.jpg')}}" width="90px" class="whatsapp_float_button"   ></a> 


<!-------------------------------------------------------------------- WhatsApp Chat Bangla End  ------------------------------------------------------>

  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">এ আর প্রোপার্টিজ এন্ড ডেভেলপার্স  </h3>
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
                  <span class="color-text-a"> মোবাইলঃ {{$contact->mobile}} .</span> </li>
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
                  > <a href="/">হোম </a>
                </li>
                <li class="item-list-a">
                  > <a href="{{ url('aboutpage') }}">সম্বন্ধে </a>
                </li>
                <li class="item-list-a">
                  > <a href="{{ url('property-grid') }}">প্রকল্প</a>
                </li>
                <li class="item-list-a">
                > <a href="{{ url('contactpage') }}">যোগাযোগ</a>
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
         <h3 style="color: green">Our Social Sites</h3>
		
          <div class="socials-a">
           <a href="{{$contact->facebook}}"  ><img style="height:50px;width:50px;" src="{{url('image/facebookicon.svg')}}" ></a>

         <a href="{{$contact->youtube}}" > <img style="height:50px;width:50px;" src="{{url('image/Youtube.png')}}" > </a>
         <a href="{{$contact->instragram}}" ><img style="height:50px;width:50px;" src="{{url('image/instragram.svg')}}" ></a>
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
  <!--/ Footer End /-->

<a href="#"  class="back-to-top" > <img  style="height:50px; width:60px; float:right;position:fixed;bottom:10px;right:0px;" src="{{url('image/bottomtotop.png')}}"></a>
  <div id="preloader"></div>
  
<?php } ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
  
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60cb6333490b559e"></script>


</body>
</html>
