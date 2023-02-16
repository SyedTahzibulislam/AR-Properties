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
            <a class="btn btn-primary" href="{{ route('sitedescription.index') }}"> Back</a>
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
   
<form action="{{ route('sitedescription.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name of the Site:</strong>
                <input type="text" name="fristnametite" class="form-control" placeholder="Site first name">
            </div>
			
			            <div class="form-group">
                <strong>Last Name of the Site:</strong>
                <input type="text" name="lastnametite" class="form-control" placeholder="Site Last name">
            </div>
			
						            <div class="form-group">
                <strong>Site Icon Title :</strong>
                <input type="text" name="siteicontitle" class="form-control" placeholder="Site Last name">
            </div>

		       
			 

		
		
					 
            <div class="form-group">
                <strong>Mata Description:</strong>
                <textarea style="height:150px" name="metadescription" class="form-control" placeholder=" Meta Description"></textarea>
            </div>
       
		
						 
            <div class="form-group">
                <strong>Mata Name:</strong>
                <textarea style="height:150px" name="metanmae" class="form-control" placeholder=" Meta Name"></textarea>
            </div>  
			
	
       
		
		
		
		
		
	



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fivicon:</strong>
                <input type="file" name="favicon" class="form-control" placeholder="PNG Image only">
            </div>
        </div>
		
		  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apple Touch Icon:</strong>
                <input type="file" name="appletouchicon" class="form-control" placeholder="PNG Image Only">
            </div>
        </div> 
		
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection