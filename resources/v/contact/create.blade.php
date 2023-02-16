@extends('contact.layout')
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
            <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>
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
   
<form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                <input type="tel" name="mobile" class="form-control" placeholder="Mobile No:">
            </div>

		       

            <div class="form-group">
                <strong>Email:</strong> 
                <input type="email" name="email" class="form-control" placeholder="Email  ">
            </div>

		
		
		
            <div class="form-group">
                <strong>Facebook Link:</strong>
                <input type="text" name="facebook" class="form-control" placeholder="facebook link ">
            </div>
     
		
			
            <div class="form-group">
                <strong>Youtube :</strong>
                <input type="text" name="youtube" class="form-control" placeholder="Youtube link ">
            </div>
			
			
			       <div class="form-group">
                <strong>Instragram :</strong>
                <input type="text" name="instragram" class="form-control" placeholder="Youtube link ">
            </div>
			
			
			
			            <div class="form-group">
                <strong>WhatsApp Number <span style="color:red" >(+88 যুক্ত করবেন। +880171.. এই ফর্মেট এ হবে    ) </span>:</strong> 
                <input type="text" name="whatsappnumber"  class="form-control" placeholder="whatsApp Number ">
            </div>
			
			   		 <div class="form-group">
                    <strong>Prefilled Whatsapp message :</strong>
                    <textarea class="form-control" style="height:150px" name="whatsapptext" placeholder="ডিফল্ট ওয়েলকাম মেসেজ "></textarea>
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
			
			
		
  
		
		
		
		
			 
            <div class="form-group">
                <strong>Map:</strong>
                <input type="text" name="map" class="form-control" placeholder="map">
            </div>
      
		

		
			
            <div class="form-group">
                <strong>Address :</strong>
                <input type="text" name="address" class="form-control" placeholder="Name">
            </div>
        
		
	




      
     
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection