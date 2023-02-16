@extends('products.layout')
@section('sidebar')
    @parent
@endsection 
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Slide Content</h2>
            </div>                                 
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
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
  
    <form action="{{ route('slideshow.update',$slideshow->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address line1:</strong>
                    <input type="text" name="address_line1" value="{{ $slideshow->address_line1 }}" class="form-control" placeholder="Address Line 1">
            </div>
			
			  
                <div class="form-group">
                    <strong>Address line2:</strong>
                    <input type="text" name="address_line2" value="{{ $slideshow->address_line2 }}" class="form-control" placeholder="Address Line 2">
            </div>
			
			
			                <div class="form-group">
                    <strong>Pricer per Decimal :</strong> <span style="color:red;" > (সংখ্যা হবে, কমা ব্যাবহার করবেন না।  ) </span>
                    <input type="number" name="price" value="{{ $slideshow->price }}" class="form-control" placeholder="Address Line 2">
            </div>
			
			
			
			                <div class="form-group">
                    <strong>ঠিকানা প্রথম লাইন :</strong>
                    <input type="text" name="bnaddress_line1" value="{{ $slideshow->bnaddress_line1 }}" class="form-control" placeholder="Address Line 1">
            </div>
			
			  
                <div class="form-group">
                    <strong>ঠিকানা ২য় লাইন :</strong>
                    <input type="text" name="bnaddress_line2" value="{{ $slideshow->bnaddress_line2 }}" class="form-control" placeholder="Address Line 2">
            </div>
			
			
			                <div class="form-group">
                    <strong>প্রতি শতকে মূল্য  :</strong>
                    <input type="text" name="bnprice" value="{{ $slideshow->bnprice }}" class="form-control" >
            </div>
        
          
                <div class="form-group">
                    <strong>Image:</strong> <span style="color:red;" >Width:1920 px, height: 960px; max-Image size: 4048KB </span>
                    <input type="file" name="image"  value="/image/{{ $slideshow->image }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $slideshow->image }}" width="300px">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection