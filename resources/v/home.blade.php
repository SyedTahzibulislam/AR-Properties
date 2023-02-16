
<?php 
use Illuminate\Support\Facades\Auth;

?>
<htmL>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<head>
<body style="margin:60px;">


<br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
		
        </li>
		<li class="nav-item">
		 <a class="nav-link active" aria-current="page" href= "{{asset('logout')}}">Logout</a>
		
		
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>



<h1 style="color:Red; text-align:center;"> Welcome Mr./Mrs. {{ Auth::user()->name }}<h1> <br>

			    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
		 @endif	

<?php    

use App\Models\sendcomment; 

$commentcount = sendcomment::where('user_id', '=', Auth::user()->id)->count();
if( $commentcount == 0 )
{

?>
<h2 style="color:blue; text-align:center;"> আপনি কি  দয়া করে আমাদের প্রতিষ্ঠান সম্পর্কে , আপনার মূল্যবান মন্তব্যটি রিভিউ আকারে লিখবেন? <h2> <br><br>

<div class="container">
<div class="row">



  <div style="" class="col-sm-12 ">
          <div class="row">
            <div class="col-md-7"> <h1> একটি কমেন্ট লিখেন  </h1> <br>
			
        
   	   

 
				 
			   <form method="POST" action="{{ route('sendmcomment.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('নাম') }}</label>
                           <input type="hidden"  name="user_id" value= "{{Auth::user()->id}}"  >
						  
						  
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
						<h5 style="color:red; font-szie:6px:"> *মোবাইল নম্বরটি পাবলিকলি প্রকাশ করতে আপত্তি থাকলে  মোবাইল নম্বর এর ঘর ফাঁকা রাখেন। </h5>
                            <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('মোবাইল ') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						
					
						
						

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('মন্তব্য ') }}</label>

                            
                    <div class="form-group">
                      <textarea name="body" class="form-control" name="body" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ old('body') }} </textarea>
                      <div class="validation"></div>
                    </div>
                
                        </div>

                       
<br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
			  
			
			
			
			</div>
			
</div>
</div>

<?php }  else { ?>


<h5 style="text-align:center" > আপনি কি আপনার পূর্বে করা  মন্তব্যটি ডিলিট  করতে চান </h5>
<div  style="text-align: center;">
                <form action="{{ route('sendmcomment.destroy',Auth::user()->id) }}" method="POST">
   
                 
    
	
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </div>


<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>








