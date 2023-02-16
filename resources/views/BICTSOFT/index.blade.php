@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 
  <!--/ Carousel Star /-->
  
  
  
 <!----                  Style for testimonial         ---------->


<style>

.tcontainer {
  width: 100%;
  overflow: hidden; /* Hide scroll bar */
}
 
/* MIDDLE CONTAINER */
.ticker-wrap {
  width: 100%;
  padding-left: 100%; /* Push contents to right side of screen */
  background-color: #1abc9c;;
}

/* INNER CONTAINER */
@keyframes ticker {
  0% { transform: translate3d(0, 0, 0); }
  100% { transform: translate3d(-100%, 0, 0); }
}
.ticker-move {
  /* Basically move items from right side of screen to left in infinite loop */
  display: inline-block;
  white-space: nowrap;
  padding-right: 100%;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  animation-name: ticker;
  animation-duration: 40s;
}


.ticker-move:hover{
  animation-play-state: paused; /* Pause scroll on mouse hover */
}

/* ITEMS */
.ticker-item{
  display: inline-block; /* Lay items in a horizontal line */
  padding: 0 2rem;
}

</style> 
  
  
  
  
  <?php 
  use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

if (App::isLocale('en'))
{ ?>

  
  @section('body')
  <div style="height:80vh;"  class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      
	  @foreach ($slide as $slideshow)
	  
	
	  <div class="carousel-item-a intro-item bg-image" style="background-image: url(/image/{{ $slideshow->image }}">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
     
                    <h6 class="intro-title mb-4">
                      <span  style="font-size:20px;"  class="color-b">{{$slideshow->address_line1}}
                      <br> {{$slideshow->address_line2}}</h6>
                    <p >
                      <span style="font-size:20px;" >Price  | {{$slideshow->price}}TK/Decimal  </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endforeach

	</div>
  </div>



  <!--/ Carousel end /-->

  
  
  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">    
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
		
		 @foreach ($service as $serv)
		<div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">

              <div style="margin: 0 auto;"    class="card-title-c align-self-center">
                <h2 style="text-align: center; background: #1abc9c; color: white; padding:20px" class="title-c">{{$serv->service_name}}</h2>
              </div>
            </div>
           <div class="card-body-c">
              <p class="content-c">
			  {!! nl2br(e($serv->description_1st)) !!}	
			  
			
              </p>
            </div>
            <div class="card-footer-c">
              <a   style="color:red;" href="{{url('servicepage')}}\{{ $serv->id }}" class="link-c link-icon">Details > 
                

				
             



			 </a>
            </div>
          </div>
        </div>
		</br>
		@endforeach

      </div>
    </div>
  </section>
  <!--/ Services End /-->

  
  
  
  
  <!--/ Events Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> Events </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">All Events
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div id="intro" class="owl-carousel owl-theme">
	
   
@foreach($eventcrationinapp as $e )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('event-single')}}\{{ $e->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $e->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$e->title}}   </h5>
				
			
				  </div>
	         <div class="card-footer-c">
             <a href="{{url('event-single')}}\{{ $e->id }}'#carousel_id" class="link-c link-icon" style="color:blue;"    > Details >
               
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  <!--/ Property End /-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> Projects</h2>
            </div>
            <div class="title-link">
              <a href="property-grid">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div id="intro" class="owl-carousel owl-theme">
	
   
@foreach($prop as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->address_line1}} <br> {{$pro->adress_line2}}  </h5>
				<h4 style="color:red;font-size:16px;" > Price: {{$pro->price}}-{{$pro->maxprice}} TK/Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-c link-icon" style="color:blue;"    > Details >
               
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  <!--/ Property End /-->


  <!--/ Agents Star /-->
  <!--
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Tema Members</h2>
            </div>

          </div>
        </div>
      </div>
      
	  <div class="container">
     <div class="row">

 @foreach($tea as $t )
<div class="col-md-4   "  >           
 <div class="col-md-12 border  border-primary"  >
  <img style="margin-top:13px;"  src="/image/{{ $t->image }}"  class="card-img-top " alt="" >
  <h5 style="text-align:center ; color:blue;font-size:20px; font-family: Times New Roman;" >{{$t->name}}</h5>
  <p class="title" style="text-align:center; color:black; font-family: Times New Roman;" ><b>{{$t->designation}}</b></p>
  <b style= " color:tomato; margin-left:0px; font-family: Times New Roman; " > Mobile NO:<a href="tel:{{ $t->mobile}}">{{$t->mobile}}</a> </b>
  <br> <b style= " color:green; margin-left:0px; font-family: Times New Roman;" > Email:{{$t->email}} </b>
  <br>
</div>
<br>
    </div>
	
 @endforeach
	
    </div>
	</div>
  </section>
  <!--/ Agents End /-->

 -->


 <!--/ Latest Properties /-->
 <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Projects</h2>
            </div>
            <div class="title-link">
              <a href="property-grid">All Projects >
                
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div id="intro" class="owl-carousel owl-theme">
	
   
@foreach($proplatest as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->address_line1}} <br> {{$pro->adress_line2}}  </h5>
				<h4 style="color:red; font-size:16px;" > Price: {{$pro->price}}-{{$pro->maxprice}} TK/Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id " class="link-c link-icon" style="color:blue;"  >Details >
                
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
 
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
			
              <h2  style="color:red;" class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
     
<div class="tcontainer"><div class="ticker-wrap"><div class="ticker-move">
  @foreach ($comment as $comment )	
  
  <div class="ticker-item"><h2  style="color:white; padding:20px; "> Name: {{$comment->name}} , Mobile No: {{$comment->mobile}} , Ceommnet:  {{$comment->body}}  ***** <h2></div>
  @endforeach
</div></div></div>
   


   </div>
  </section>
 
  <!--/ Testimonials End /-->
  @endsection
  
<?php }  


///////////////////////////////////////////////////////////////////// Bangla Translation ///////////////////////////////////////


if (App::isLocale('bn')) { ?>


  @section('body')
  <div style="height:80vh; width:80%; margin: 0 auto;" class="intro intro-carousel  ">
    <div id="carousel" class="owl-carousel owl-theme">
      
	  @foreach ($slide as $slideshow)
	  
	
	  <div class="carousel-item-a intro-item bg-image" style="background-image: url(/image/{{ $slideshow->image }}">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      
                    <h6 class="intro-title mb-4">      
                      <span class="color-b"   style="font-size:20px;"  >{{$slideshow->bnaddress_line1}}
                      <br> {{$slideshow->bnaddress_line2}}</h6>
                    <p >
                     <span style="font-size:20px;"     >মূল্য  | {{$slideshow->bnprice}} টাকা/ শতক  </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endforeach

	</div>
  </div>



  <!--/ Carousel end /-->

  
  
  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h4 class="title-a">আমাদের সার্ভিস সমূহঃ </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
		
		 @foreach ($service as $serv)
		<div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">

              <div style="margin: 0 auto;"    class="card-title-c align-self-center">
                <h4 style="text-align: center; background: #1abc9c; color: white; padding:20px" class="title-c">{{$serv->bnservice_name}}</h4>
              </div>
            </div>
           <div class="card-body-c">
              <p class="content-c">
			  {!! nl2br(e($serv->bndescription_1st)) !!}	
			  
			
              </p>
            </div>
            <div class="card-footer-c">
              <a   style="color:red;" href="{{url('servicepage')}}\{{ $serv->id }}" class="link-c link-icon"> বিস্তারিত  >
                

				
             



			 </a>
            </div>
          </div>
        </div>
		</br>
		@endforeach

      </div>
    </div>
  </section>
  <!--/ Services End /-->

  
  
  
  
  
  
  
    <!--/ Events Star /-->
  <section  class="section-property section-t8">
    <div    class="container">
      <div  class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> ইভেন্টসঃ  </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">ঈভেন্ট সমূহঃ
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div  id="intro" class="owl-carousel owl-theme">
	
   
@foreach($eventcrationinapp as $e )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('event-single')}}\{{ $e->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $e->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$e->title}}   </h5>
				
			
				  </div>
	         <div class="card-footer-c">
             <a href="{{url('event-single')}}\{{ $e->id }}'#carousel_id" class="link-c link-icon" style="color:blue;"    > Details >
               
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> প্রকল্প সমূহঃ  </h2> 
            </div>
            <div class="title-link">
              <a href="property-grid"> বিস্তারিত >
               
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div id="intro" class="owl-carousel owl-theme"> 
	
   
@foreach($prop as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   > 
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue; font-size:20px;">  {{$pro->bnaddress_line1}} <br> {{$pro->bnadress_line2}}  </h5>
				<h4 style="color:red; font-size:16px;" > মূল্য : {{$pro->bnprice}}- {{$pro->maxbnprice}} টাকা /শতক </h4> 

				  </div>
	         <div class="card-footer-c">
               <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id " class="link-c link-icon" style="color:blue;"   >বিস্তারিত  >
               
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  <!--/ Property End /-->
  <!--/ Agents Star /-->
  <!--
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">আমাদের টিম মেম্বারগণ </h2> 
            </div>

          </div>
        </div>
      </div>
      
	  <div class="container">
     <div class="row">

 @foreach($tea as $t )
<div class="col-md-4   "  >           
 <div class="col-md-12 border  border-primary"  >
  <img style="margin-top:13px;"  src="/image/{{ $t->image }}"  class="card-img-top " alt="" >
  <h3 style="text-align:center ; font-size:20px; color:blue;" >{{$t->bnname}}</h3>
  <p class="title" style="text-align:center;  color:black;" ><b>{{$t->bndesignation}}</b></p>
  <b style= " color:tomato; margin-left:0px " > মোবাইল :<a  style= " color:tomato; margin-left:0px;"    href="tel:{{ $t->mobile}}">{{$t->mobile}}</a></b> 
  <br> <b style= " color:green; margin-left:0px; font-size:15px;" > ইমেইল :{{$t->email}} </b>
  <br>
</div>
<br>
    </div>
	
 @endforeach
	
    </div>
	</div>
  </section>
  <!--/ Agents End /-->

 


 <!--/ Latest Properties /-->
 <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">বর্তমান প্রকল্প সমূহঃ    </h2>
            </div>
            <div class="title-link">
              <a href="property-grid"> বিস্তারিত   >  
                
              </a>
            </div>
	
          </div>
        </div>
      </div>
	  
	   
	     <div id="intro" class="owl-carousel owl-theme">
	
   
@foreach($proplatest as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->bnaddress_line1}} <br> {{$pro->bnadress_line2}}  </h5>
				<h4 style="color:red;font-size:16px;" >মূল্য : {{$pro->bnprice}}- {{$pro->maxbnprice}} টাকা/শতক    </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-c link-icon"  style="color:blue;"   >বিস্তারিত  >
               
              </a>
            </div>
			
			
				  
			</div>
			</a>

			
			
		
		 
		  
          </div>
	  @endforeach
		 </div>

	
    </div>
  </section>
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 style="color:red;" class="title-a"> গ্রাহকদের অভিজ্ঞতা শেয়ার </h2>
            </div>
          </div>
        </div>
      </div>
    




<div class="tcontainer"><div class="ticker-wrap"><div class="ticker-move">
  @foreach ($comment as $comment )	
  
  <div class="ticker-item"><h2  style="color:white; padding:20px; "> নামঃ {{$comment->name}} , মোবাইল নংঃ {{$comment->mobile}} ,  মন্তব্যঃ  {{$comment->body}}  ***** <h2></div>
  @endforeach
</div></div></div>
	  



	
	
	
    
	
	
	
	</div>
  </section>
  
  
<?php } ?>








   
  
   @section('footer')
   @parent
   @endsection


