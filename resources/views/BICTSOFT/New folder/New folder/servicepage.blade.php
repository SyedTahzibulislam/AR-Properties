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
  
  
img {
  width: 100%;
  height: auto;
}
</style>

 
    @section('body')



  <!--/ Intro Single star /-->
<?php 
if (App::isLocale('en')) {


 ?> 

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$serv->slogan_1}}</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
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
            <img src="/image/{{ $serv->image }}" alt="AR properties">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$serv->service_name}}
              <span></span>
              <br> Since {{$serv->starting_date}}</h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">

            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>{{$serv->slogan_2}}</span>
              </div>
            </div>
            <div class="col-md-9 col-lg-10 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Sed
                  
              </div>
              <p class="color-text-a">
			  {{$serv->description_1st}}
              </p>
			                <p class="color-text-a">
			  {{$serv->description_2nd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->description_3rd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->description_4th}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->description_5th}}
              </p>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




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

  <!--/ Team End /-->

  <!--/ footer Star /-->


  @endsection
  <?php }  if (App::isLocale('bn')) { ?>
  
  
    <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$serv->slogan_1}}</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
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
            <img src="/image/{{ $serv->image }}" alt="AR properties">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$serv->bnservice_name}}
              <span></span>
              <br>{{$serv->bnstarting_date}} সাল থেকে </h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">

            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>{{$serv->bnslogan_2}}</span>
              </div>
            </div>
            <div class="col-md-9 col-lg-10 section-md-t3">
             
              <p class="color-text-a">
			  {{$serv->bndescription_1st}}
              </p>
			                <p class="color-text-a">
			  {{$serv->bndescription_2nd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->bndescription_3rd}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->bndescription_4th}}
              </p>
			  
			                <p class="color-text-a">
			  {{$serv->bndescription_5th}}
              </p>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



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
  <h2 style="text-align:center ; color:blue" >{{$t->bnname}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->bndesignation}}</b></p>
  <b style= " color:tomato; margin-left:60px " > মোবাইল :{{$t->mobile}} </b>
  <br> <b style= " color:tomato; margin-left:60px" > ইমেইল :{{$t->email}} </b>
  <br>
</div>
<br>
    </div>
	
 @endforeach
	
    </div>
	</div>
  </section>

  <!--/ Team End /-->

  <!--/ footer Star /-->


  @endsection
  
  <?php } ?>
  
  
  
  
  
  
   @section('footer')
   @parent
   @endsection