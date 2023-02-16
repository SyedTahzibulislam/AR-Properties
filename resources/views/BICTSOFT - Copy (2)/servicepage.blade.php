@extends('BICTSOFT.master')
  <!--/ Nav End /-->

     <div class="click-closed"></div>
  <!--/ Form Search Star /-->


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

@section('navbarandsearch')
@parent 
@endsection




 

 
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
          <div   class="about-img-box">
            <img  src="/image/{{ $serv->image }}" alt="AR properties">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$serv->service_name}}
              <span></span>
              <br> Since {{$serv->starting_date}}</h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">


            <div  class="col-md-12">

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
  <h2 style="text-align:center ; color:blue; font-size:20px; font-family: Times New Roman; " >{{$t->name}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->designation}}</b></p>
  <b style= " color:tomato;  margin-left:0px; font-family: Times New Roman;" > Mobile NO:{{$t->mobile}} </b>
  <br> <b style= " color:green; margin-left:0px; font-family: Times New Roman;" > Email:{{$t->email}} </b>
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
            <img src="/image/{{ $serv->image }}" alt="AR properties & Developers">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">{{$serv->bnservice_name}}
              <span></span>
              <br>{{$serv->bnstarting_date}} সাল থেকে </h3>
           
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">


            <div  class="col-md-12">
             
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
  <h2 style="text-align:center ; color:blue; font-size:20px; font-family: Times New Roman; " >{{$t->bnname}}</h2>
  <p class="title" style="text-align:center; color:black;" ><b>{{$t->bndesignation}}</b></p>
  <b style= " color:tomato; margin-left:0px; font-family: Times New Roman; " > মোবাইল :{{$t->mobile}} </b>
  <br> <b style= " color:green; margin-left:0px; font-family: Times New Roman;" > ইমেইল :{{$t->email}} </b>
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