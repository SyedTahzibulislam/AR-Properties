@extends('BICTSOFT.master')
  <!--/ Nav End /-->
@section('navbarandsearch')
    @parent
@endsection 

  <!--/ Intro Single star /-->
  @section('body')
  


  <?php if (App::isLocale('bn')) { ?>

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"> যোগাযোগ করুন </h1>
            
			
		  
		  
		  </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">

            
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  
  <section class="contact">
    <div class="container">
      <div class="row">
	  @foreach( $con as $contact)
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              
			  <iframe width="100%" height="500"  src="https://maps.google.com/maps?q= {{ $contact->latitude }},{{ $contact->longitude }}&output=embed"></iframe>
			  
			  

			
			</div>
          </div>
        </div>
		@endforeach
		
		<!----------------------- send message ---------------------->
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7"> <h1> আপনার প্রশ্ন পাঠান  </h1>
			
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
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('মোবাইল নং ') }}</label>

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
			 @foreach( $con as $contact)
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">আমাদের সাথে যোগাযোগ করেন </h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">ইমেল 
                      <span class="color-a">{{ $contact->email}}</span>
                    </p>
                    <p class="mb-1">মোবাইল নং 
                      <span class="color-a"><a href="tel:{{ $contact->mobile}}">{{ $contact->mobile}}</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">ঠিকানাঃ  </h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                    {{ $contact->address}}
                      <br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title"> সোসাল সাইটস </h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                                   <a href="{{$contact->facebook}}" id="fc" class="fa fa-facebook"></a>

                                   <a href="{{$contact->youtube}}" id="fc" class="fa fa-youtube"></a>
                                    <a href="{{$contact->instragram}}" id="fc" class="fa fa-instagram"></a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  @endforeach
  
  <?php }



  else { ?>
  
  
  
    <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact Us  </h1>
            
			
		  
		  
		  </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">

            
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  
  <section class="contact">
    <div class="container">
      <div class="row">
	  @foreach( $con as $contact)
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
             
		  
			  <iframe width="100%" height="500"  src="https://maps.google.com/maps?q= {{ $contact->latitude}},{{ $contact->longitude}}&output=embed"></iframe>
			  
			  

			
			</div>
          </div>
        </div>
		@endforeach
		
		<!----------------------- send message ---------------------->
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7"> <h1> Send your message to us </h1>
			
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
			 @foreach( $con as $contact)
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Contact with us</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">{{ $contact->email}}</span>
                    </p>
                    
					 
					<p class="mb-1"> <a>Phone.</a>
                     <a> <span class="color-a"><a href="tel:{{ $contact->mobile}}">{{ $contact->mobile}}</a></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                    {{ $contact->address}}
                      <br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
            <a href="{{$contact->facebook}}" id="fc" class="fa fa-facebook"></a>

         <a href="{{$contact->youtube}}" id="fc" class="fa fa-youtube"></a>
         <a href="{{$contact->instragram}}" id="fc" class="fa fa-instagram"></a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
           

		   </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
    @endforeach
  
  
  
  
  
  <?php } ?>
  

  <!--/ Contact End /-->

  <!--/ footer Star /-->
    @endsection
  
   @section('footer')
   @parent
   @endsection