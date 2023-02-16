@extends('team.layout')
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
   
<form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

		       

            <div class="form-group">
                <strong>নাম :</strong> 
                <input type="text" name="bnname" class="form-control" placeholder="নাম ">
            </div>

		
		
		
            <div class="form-group">
                <strong>Designation:</strong>
                <input type="text" name="designation" class="form-control" placeholder="Designation">
            </div>
     
		
			
            <div class="form-group">
                <strong>পদবি :</strong>
                <input type="text" name="bndesignation" class="form-control" placeholder="পদবি ">
            </div>
  
		
		
		
		
			 
            <div class="form-group">
                <strong>mobile:</strong>
                <input type="text" name="mobile" class="form-control" placeholder="Name">
            </div>
      
		

		
			
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Name">
            </div>
        
		
	




      
            <div class="form-group">
                <strong>Image:</strong><span style="color:red;">( Max-Height:300px )</span>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection