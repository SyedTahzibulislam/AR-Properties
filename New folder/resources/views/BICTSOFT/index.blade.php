@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 
  <!--/ Carousel Star /-->
  
  
  
 <!----                  Style for testimonial  slide        ---------->


<style>

.tcontainer {
  width: 100%;
  overflow: hidden; /* Hide scroll bar */
 
}
 
/* MIDDLE CONTAINER */
.ticker-wrap {
  width: 100%;
  padding-left: 100%; /* Push contents to right side of screen */
  background-color: #1abc9c;
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
 <!------------------------------------- End style for slide --------------------------> 
  
  
  
  <?php 
  use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

if (App::isLocale('en'))
{ ?>

  
  @section('body')
  <div  class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      
	  @foreach ($slide as $slideshow)
	  
	
	  <div class="carousel-item-a intro-item bg-image" style="background-image: url(/image/{{ $slideshow->image }})">
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

              <div style="margin: 0 auto;"    class="card-title-c align-self-center">
                <h2 style="text-align: center; background: #1abc9c; color: white; padding:20px" class="title-c">{{$serv->service_name}}</h2>
              </div>
            </div>
           <div class="card-body-c">
              <p class="content-c">
			  {{$serv->description_1st}}
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
              <a href="property-grid">All Properties >
                
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
  
  <div class="ticker-item"><h2  style="color:white; padding:20px "> Name: {{$comment->name}} , Mobile No: {{$comment->mobile}} , Ceommnet:  {{$comment->body}}  ***** <h2></div>
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
                     <span style="font-size:2.5vw;" class="price-a">???????????????  | {{$slideshow->bnprice}} ????????????/ ?????????  </span>
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
              <h2 class="title-a">?????????????????? ????????????????????????????????? </h2>
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
                <h2 style="text-align: center; background: #1abc9c; color: white; padding:20px" class="title-c">{{$serv->bnservice_name}}</h2>
              </div>
            </div>
           <div class="card-body-c">
              <p class="content-c">
			  {{$serv->bndescription_1st}}
              </p>
            </div>
            <div class="card-footer-c">
              <a   style="color:red;" href="{{url('servicepage')}}\{{ $serv->id }}" class="link-c link-icon"> ???????????????????????????  >
                

				
             



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

  
  
  
  
  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a"> ?????????????????????????????? </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">?????? ??????????????????????????????????????????   >
               
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
				<h4 style="color:red" > ??????????????? : {{$pro->bnprice}} ???????????? /????????? </h4> 

				  </div>
	         <div class="card-footer-c">
               <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id " class="link-c link-icon" style="color:blue;"   >???????????????????????????  >
               
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
              <h2 class="title-a">?????????????????? ????????? ??????????????????????????? </h2> 
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
  <b style= " color:tomato; margin-left:0px " > ?????????????????? :<a  style= " color:tomato; margin-left:0px;"    href="tel:{{ $t->mobile}}">{{$t->mobile}}</a></b> 
  <br> <b style= " color:green; margin-left:0px; font-size:15px;" > ??????????????? :{{$t->email}} </b>
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
              <h2 class="title-a">?????????????????????  ?????????????????????????????? </h2>
            </div>
            <div class="title-link">
              <a href="property-grid">????????? ???????????????????????????????????????  > 
                
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
				<h4 style="color:red" > ??????????????? : {{$pro->price}} ????????????/?????????    </h4>

				  </div>
	         <div class="card-footer-c">
              <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-c link-icon"  style="color:blue;"   >???????????????????????????  >
               
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
              <h2 style="color:red;" class="title-a"> ??????????????????????????? ???????????????????????? ??????????????? </h2>
            </div>
          </div>
        </div>
      </div>
    




<div class="tcontainer"><div class="ticker-wrap"><div class="ticker-move">
  @foreach ($comment as $comment )	
  
  <div class="ticker-item"><h2  style="color:white; padding:20px; "> ???????????? {{$comment->name}} , ?????????????????? ????????? {{$comment->mobile}} ,  ????????????????????????  {{$comment->body}}  ***** <h2></div>
  @endforeach
</div></div></div>
	  



	
	
	
    
	
	
	
	</div>
  </section>
  
  
<?php } ?>








   
  
   @section('footer')
   @parent
   @endsection


