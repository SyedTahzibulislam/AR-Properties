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
            <a class="btn btn-primary" href="{{ route('eventcreate.index') }}"> Back</a>
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
   
<form action="{{ route('eventcreate.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
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
		

		
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection