@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 


  <!--/ Intro Single star /-->
    @section('body')
	
	<?php 
if (App::isLocale('en')) {


 ?>
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Projects</h1>
            
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
    
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">

       



 @foreach($prop as $pro)
             
	   <div class="col-md-4">
	    <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
          <div class="card-box-a card-shadow">
           
<a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">  
		   <div class="img-box-a">
			  
			
              <img src="/image/{{ $pro->image }}" alt=""  height="500" ">
			 
          
           
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2  style="font-size:16px; color:white;"  class="card-title-a">
                    <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id  ">{{$pro->address_line1}},
                      <br /> {{$pro->adress_line2}}</a>      
                  </h2>
                </div>
                <div >
                  <div >
                    <span  style="font-size:16px; color:white;">price |{{$pro->price}}-{{$pro->maxprice}} TK/ Decimal</span>
				
                  </div>
                  <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-a">Click here to view >
                    </span>
                  </a>
                </div>

              </div>
			  </a>
			  
            </div>
			</a>
          </div>
		  
		 
		    
        </div>
      
		
	@endforeach	
		


	 </div>

    </div>
  </section>
  
  <?php }  else { ?>
  
  
    <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">আমাদের প্রকল্প সমূহঃ  </h1>
            
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
      
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">  

       



 @foreach($prop as $pro)
             
	   <div class="col-md-4">
	    <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">
          <div class="card-box-a card-shadow">
            <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id ">  

		   <div class="img-box-a">
			  
			
              <img src="/image/{{ $pro->image }}" alt=""  height="500" ">
			 
          
           
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2  style="font-size:16px; color:white;" class="card-title-a">
                    <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id  ">{{$pro->bnaddress_line1}},
                      <br /> {{$pro->bnadress_line2}}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span  style="font-size:16px; color:white;"> মূল্যঃ |{{$pro->bnprice}}-{{$pro->maxbnprice}} টাকা / শতক </span> 

                  </div>
                  <a href="{{url('property-single')}}\{{ $pro->id }}'#carousel_id" class="link-a">বিস্তারিত দেখতে এখানে  ক্লিক করুন  >
                    
                  </a>
                </div>

              </div>
			  </a>
			  
            </div>
			</a>
          </div>
		  
		 
		    
        </div>
      
		
	@endforeach	
		


	 </div>

    </div>  
  </section>
  
  <?php } ?>
  
  
  
  
  
  
  <!--/ Property Grid End /-->

 

  @endsection
  
   @section('footer')
   @parent
   @endsection