@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 

   <style>
    .card-img-top{
	  height : 350px;
	  width:100%;
	  object-fit:cover;
	  
  }
  
  
.about-img-box img {
  width: 100%;
  height: auto;
}
</style>
 

  @section('body')
  <!--/ Intro Single star /-->
  <?php 
  use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

if (App::isLocale('en'))
{ ?>
@foreach($about as $about )
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$about->slogan_1}}</h1>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  

  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="/image/{{ $about->image }}" alt="AR properties">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$about->service_name}}
              <span></span>
              <br> Since {{$about->starting_date}}</h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">

            <div class="col-lg-2  d-none d-lg-block">
               <div style="font-size:20px; color:red;" class="title-vertical d-flex justify-content-start">
                <span>{{$about->slogan_2}}</span>
              </div>
            </div>
            <div  style="margin-left:300px;"  class="col-md-9 col-lg-10 section-md-t3">
              <div class="title-box-d">
                
                  
              </div>
              <p class="color-text-a">
			  {{$about->description_1st}}
              </p>
			                <p class="color-text-a">
			  {{$about->description_2nd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$about->description_3rd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$about->description_4th}}
              </p>
			  
			                <p class="color-text-a">
			  {{$about->description_5th}}
              </p>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endforeach

 <!--/ About End /-->

  <!--/ Team Star /-->
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
  <h2 style="text-align:center ; color:blue; font-size:20px;" >{{$t->name}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->designation}}</b></p>
  <b style= " color:tomato; margin-left:0px " > Mobile NO:{{$t->mobile}} </b>
  <br> <b style= " color:green; margin-left:0px; font-size:15px;" > Email:{{$t->email}} </b>
  <br>
</div>
<br>
    </div>
	
 @endforeach
	
    </div>
	</div>
  </section>
  
<?php }



////////////////////////////////////////////////////////////Bangla////////////////////////////////////////////////



 else { ?>



@foreach( $about as $about  )
 <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$about->slogan_1}}</h1>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  

  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="/image/{{ $about->image }}" alt="AR properties">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$about->bnservice_name}}
              <span></span>
              <br> {{$about->bnstarting_date}} সাল থেকে </h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">

            <div   class="col-lg-2  d-none d-lg-block">
              <div style="font-size:20px; color:red;" class="title-vertical d-flex justify-content-start">
                <span>{{$about->bnslogan_2}}</span>  
              </div>
            </div>
            <div  style="margin-left:300px;" class="col-md-9 col-lg-10 section-md-t3   ">
              <div class="title-box-d">
                
                  
              </div>
              <p class="color-text-a">
			  {{$about->bndescription_1st}}
              </p>
			                <p class="color-text-a">
			  {{$about->bndescription_2nd}} 
              </p>
			  
			                <p class="color-text-a">
			  {{$about->bndescription_3rd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$about->bndescription_4th}}
              </p>
			  
			                <p class="color-text-a">
			  {{$about->bndescription_5th}}
              </p>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endforeach

 <!--/ About End /-->

  <!--/ Team Star /-->
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
  <h2 style="text-align:center ; color:blue; font-size:20px;" >{{$t->bnname}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->bndesignation}}</b></p>
  <b style= " color:tomato; margin-left:0px " > মোবাইল :{{$t->mobile}} </b>
  <br> <b style= " color:green; margin-left:0px; font-size:12px;" > ইমেইল :{{$t->email}} </b>
  <br>
</div>
<br>
    </div>
	
 @endforeach
	
    </div>
	</div>
  </section>
  

















<?php } ?>
  <!--/ Team End /-->

  <!--/ footer Star /-->
   @endsection
  
   @section('footer')
   @parent
   @endsection
