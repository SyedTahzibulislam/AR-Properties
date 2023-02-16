@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 
  <!--/ Carousel Star /-->
  @section('body')
  <div class="intro intro-carousel">
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
                      <a href="blog-single"><span class="price-a">price | {{$slideshow->price}} TK </span></a>
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
              <a href="{{asset('servicepage')}}\{{ $serv->id }}" class="link-c link-icon">Read more
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
	
   
@foreach($prop as $pro )
   
		 <div class="ms-2 me-2 ">
		 
             <a href="{{asset('property-single')}}\{{ $pro->id }} ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->address_line1}} <br> {{$pro->adress_line2}}  </h5>
				<h4 style="color:red" > Price: {{$pro->price}} TK per Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Details
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
  <h2 style="text-align:center ; color:blue" >{{$t->name}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->designation}}</b></p>
  <b style= " color:tomato; margin-left:60px " > Mobile NO:{{$t->mobile}} </b>
  <br> <b style= " color:tomato; margin-left:60px" > Email:{{$t->email}} </b>
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
		 
             <a href="{{asset('property-single')}}\{{ $pro->id }} ">
			 <div class="card">
              <img data-src="/image/{{ $pro->image }}" alt="" class="card-img-top owl-lazy"   >
				  <div class="card-body">
				<h5 class="card-title   " style="color:blue">  {{$pro->address_line1}} <br> {{$pro->adress_line2}}  </h5>
				<h4 style="color:red" > Price: {{$pro->price}} TK per Decimal  </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Details
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
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
			              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>

              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
       

	   <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
     


	 </div>
    </div>
  </section>
  <!--/ Testimonials End /-->
  @endsection
  
   @section('footer')
   @parent
   @endsection


