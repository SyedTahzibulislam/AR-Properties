@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Content</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('service.index') }}"> Back</a>
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
   
<form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
    
	    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                 
				
			<input type="text" class="form-control"	 name="service_name"  placeholder="Title">
            </div>
        </div>
	

	  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First paragraph(Must Fill UP):</strong>
				
                <textarea style="height:150px" name="description_1st" class="form-control" placeholder="First paragraph"></textarea>
            </div>
        </div>
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>2nd paragraph:</strong>
                <textarea style="height:150px" name="description_2nd" class="form-control" placeholder="2nd paragraph"></textarea>
            </div>
        </div>
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Third paragraph:</strong>
                <textarea style="height:150px" name="description_3rd" class="form-control" placeholder="3rd paragraph"></textarea>
            </div>
        </div>
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fourth paragraph:</strong>
                <textarea style="height:150px" name="description_4th" class="form-control" placeholder="Fourth paragraph"></textarea>
            </div>
        </div>
		
			  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fifth paragraph:</strong>
                <textarea style="height:150px" name="description_5hth" class="form-control" placeholder="Fifth paragraph"></textarea>
            </div>
        </div>







        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection