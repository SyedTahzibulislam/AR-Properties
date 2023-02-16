@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 
  <!--/ Carousel Star /-->
  
  				<style>
				@media screen and (max-width:700px){
				.ion-ios-arrow-forward   {
					
					 display: none;
				}
				.card-box-ico {
					
					 display: none;
				}
                 
				 .title-c {
					color:red; 
				 }
				
				}
				</style>
  
  <?php 
  use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

if (App::isLocale('en'))
{ ?>

  
  @section('body')
  <div  class="intro intro-carousel">
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
                      
                    <h1 class="intro-title mb-4">
                      <span class="color-b">{{$slideshow->address_line1}}
                      <br> {{$slideshow->address_line2}}</h1>
                    <p class="intro-subtitle intro-price">
                      <span style="font-size:2.5vw;" class="price-a">Price  | {{$slideshow->price}}TK/Decimal  </span>
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
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">{{$serv->service_name}}</h2>
              </div>
            </div>
           <div class="card-body-c">
              <p class="content-c">
			  {{$serv->description_1st}}
              </p>
            </div>
            <div class="card-footer-c">
              <a href="{{url('servicepage')}}\{{ $serv->id }}" class="link-c link-icon">Details
                

				<span   class="ion-ios-arrow-forward"></span>
             



			 </a>
            </div>
          </div>
        </div>
		@endforeach

      </div>
    </div>
  </section>
  <!--/ Services End /-->

  
  
  
  
  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> Properties</h2>
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
				<h4 style="color:red" > Price: {{$pro->price}} TK per Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-c link-icon">Details
                <span class="ion-ios-arrow-forward"></span>
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

 


 <!--/ Latest Properties /-->
 <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
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
	
   
@foreach($proplatest as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->address_line1}} <br> {{$pro->adress_line2}}  </h5>
				<h4 style="color:red" > Price: {{$pro->price}} TK per Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id " class="link-c link-icon">Details
                <span class="ion-ios-arrow-forward"></span>
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
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
     
	  <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        
		 @foreach ($comment as $comment )
		<div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">

 
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
				  {{$comment->body}}
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img  src="image/people.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author"> Name: {{$comment->name}}</h5>
				  <h5 style="margin-top:-5px;"   class="testimonial-author">Mob: {{$comment->mobile}}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
       @endforeach


     


	 </div>
   


   </div>
  </section>
  <!--/ Testimonials End /-->
  @endsection
  
<?php }  


///////////////////////////////////////////////////////////////////// Bangla Translation ///////////////////////////////////////


if (App::isLocale('bn')) { ?>


  @section('body')
  <div style="width:80%;margin: 0 auto;" class="intro intro-carousel  ">
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
                      
                    <h1 class="intro-title mb-4">      
                      <span class="color-b">{{$slideshow->bnaddress_line1}}
                      <br> {{$slideshow->bnaddress_line2}}</h1>
                    <p class="intro-subtitle intro-price">
                     <span style="font-size:2.5vw;" class="price-a">মূল্য  | {{$slideshow->bnprice}} টাকা/ শতক  </span>
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
              <h2 class="title-a">আমাদের সার্ভিসসমূহ </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
		
		 @foreach ($service as $serv)
		<div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">{{$serv->bnservice_name}}</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
			  {{$serv->bndescription_1st}}
              </p>
            </div>
            <div class="card-footer-c">
              <a href="{{url('servicepage')}}\{{ $serv->id }}" class="link-c link-icon">বিস্তারিত পড়ুন 
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
		@endforeach

      </div>
    </div>
  </section>
  <!--/ Services End /-->

  
  
  
  
  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> প্রপার্টিজ </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">সব প্রপার্টিজগুলো দেখেন 
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
				<h5 class="card-title   " style="color:blue">  {{$pro->bnaddress_line1}} <br> {{$pro->bnadress_line2}}  </h5>
				<h4 style="color:red" > মূল্য : {{$pro->bnprice}} টাকা /শতক </h4> 

				  </div>
	         <div class="card-footer-c">
               <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id " class="link-c link-icon">বিস্তারিত 
                <span class="ion-ios-arrow-forward"></span>
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
              <h2 class="title-a">লেটেস্ট  প্রপার্টিজ </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">সব প্রপার্টিগুলো দেখান 
                <span class="ion-ios-arrow-forward"></span>
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
				<h4 style="color:red" > মুল্য : {{$pro->price}} টাকা/শতক    </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-c link-icon">বিস্তারিত
                <span class="ion-ios-arrow-forward"></span>
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
              <h2 class="title-a"> গ্রাহকদের অভিজ্ঞতা শেয়ার </h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        
		 @foreach ($comment as $comment )
		<div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">

 
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
				  {{$comment->body}}
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img  src="image/people.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author"> Name: {{$comment->name}}</h5>
				  <h5 style="margin-top:-5px;"   class="testimonial-author">Mob: {{$comment->mobile}}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
       @endforeach


     


	 </div>
    </div>
  </section>
  
  
<?php } ?>








   
  
   @section('footer')
   @parent
   @endsection


