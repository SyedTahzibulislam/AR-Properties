@extends('products.layout')
@section('sidebar')
    @parent
@endsection 
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Slide Image</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('slideshow.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('slideshow.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address Line1:</strong>
                <input type="text" name="address_line1" class="form-control" placeholder="Name">
            </div>
        

            <div class="form-group">
                <strong>Address Line2:</strong>
                <input type="text" name="address_line2" class="form-control" placeholder="Name">
            </div>
			
			 <div class="form-group">
                <strong>  Price per Decimal :</strong><span style="color:red;" >  </span>
                <input type="text" name="price" class="form-control" placeholder="Name">
            </div>
			
		
			
			
			            <div class="form-group">
                <strong> ঠিকানা প্রথম লাইন :</strong>  
                <input type="text" name="bnaddress_line1" class="form-control" placeholder="Name">
            </div>
        

            <div class="form-group">
                <strong>ঠিকানা ২য় লাইন :</strong>
                <input type="text" name="bnaddress_line2" class="form-control" placeholder="Name">
            </div>
			
		
			
			
			 <div class="form-group">
                <strong>মূল্য/ শতক  :</strong>
                <input type="text" name="bnprice" class="form-control" placeholder="Name">
            </div>
    

        
            <div class="form-group">
                <strong>Image:</strong><span style="color:red;" > ( Width:1920 px, height: 960px; max-Image size: 2MB, ইমেজ সাইজ কম রাখালে সাইট ফাস্ট হবে  ) </span>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection