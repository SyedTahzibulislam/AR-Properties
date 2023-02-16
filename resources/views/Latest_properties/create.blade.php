@extends('Latest_properties.layout')
  @section('sidebar')
    @parent
@endsection 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('property.index') }}"> Back</a>
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
   
<form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Addressline1:</strong>
                <input type="text" name="address_line1" class="form-control" placeholder="Addressline1">
            </div>
        </div>
		       
			   <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ঠিকানা ১ :</strong> 
                <input type="text" name="bnaddress_line1" class="form-control" placeholder="ঠিকানা ১">
            </div>
        </div>
		
		
		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Addressline2:</strong>
                <input type="text" name="adress_line2" class="form-control" placeholder="Addressline2">
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ঠিকানা ২:</strong>
                <input type="text" name="bnadress_line2" class="form-control" placeholder="ঠিকানা ২">
            </div>
        </div>
		
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> search location:</strong> ( যে কি ওয়ার্ড দিয়ে  সার্চ দিলে স্থানটি পাওয়া যাবে সেটা লিখুন। যেমন ডুমুরিয়া, বয়রা ইত্যাদি। )
                <input type="text" name="searchlocation" class="form-control" required>
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Minimum Price:</strong> ( সংখ্যা লিখুন ইংরেজিতে, কমা ব্যবহার করবেন না। উদাঃ 2345 ) 
                <input type="text" name="price" class="form-control" placeholder="Price" required>
            </div>
        </div>
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Maximum Price:</strong>
                <input type="text" name="maxprice" class="form-control" placeholder="maxprice" >
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> সর্বনিম্ন  মূল্য :</strong>
                <input type="text" name="bnprice" class="form-control" placeholder="মূল্য">
            </div>
        </div>
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> সর্বোচ্চ মূল্য :</strong>
                <input type="text" name="maxbnprice" class="form-control" placeholder="মূল্য">
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>পরিমাণ (শতক ) :</strong> ( শুধু সংখ্যা লিখবেন। যেমনঃ ৫ ) 
                <input type="text" name="area" class="form-control" placeholder="Area">
            </div>
        </div>
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>জমির পরিমাপ :</strong>
                <input type="text" name="bnarea" class="form-control" placeholder="জমির পরিমাপ">
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Video:</strong>
                <input type="text" name="video" class="form-control" placeholder="Video">
            </div>
        </div>
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Map:</strong>
                <input type="text" name="map" class="form-control" placeholder="map">
            </div>
        </div>
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Latitude :</strong><span color="red" >   ( নমুনা ইনপুটঃ 22°50'08.3 - এখানে "N বাদ দিয়ে লিখবেন)   </span>
                <input type="text" name="latitude" class="form-control" placeholder="latitude">
            </div>
        </div>
		
		
							  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Longitude :</strong> <span color="red" >   ( নমুনা ইনপুটঃ 89°31'55.7 - এখানে "Eবাদ দিয়ে লিখবেন)   </span>
                <input type="text" name="longitude" class="form-control" placeholder="longitude">
            </div>
        </div>
		
		
		
					  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea style="height:150px" name="description" class="form-control" placeholder=" Description"></textarea>
            </div>
        </div>
		
		
		
		
		
							  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>বিবরণ:</strong> 
                <textarea style="height:150px" name="bndescription" class="form-control" placeholder="বিবরণ "></textarea>
            </div>
        </div>  



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong> ( image size < 5000 KB )
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
		
		
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong> ( image size < 5000 KB )
                <input type="file" name="image1" class="form-control" placeholder="image">
            </div>
        </div>
		
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong> ( image size < 5000 KB )
                <input type="file" name="image2" class="form-control" placeholder="image">
            </div>
        </div>
		
		
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong> ( image size < 5000 KB )
                <input type="file" name="image3" class="form-control" placeholder="image">
            </div>
        </div>
		
		        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong> ( image size < 5000 KB )
                <input type="file" name="image4" class="form-control" placeholder="image">
            </div>
        </div>
		
		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>scratch:</strong> ( image size < 5000 KB )
                <input type="file" name="scratch" class="form-control" placeholder="scratch">
            </div>
        </div> 
		
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection