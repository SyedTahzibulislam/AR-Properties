@extends('service.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Service</h2>
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
                <strong>Title Bangla :</strong>
                 
				
			<input type="text" class="form-control"	 name="bnservice_name"  placeholder="Title">
            </div>
        </div>
	

	  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First paragraph:</strong>
				
                <textarea style="height:150px" name="description_1st" class="form-control" placeholder="First paragraph"></textarea>
            </div>
			
			            <div class="form-group">
                <strong>First paragraph Bangla:</strong>
				
                <textarea style="height:150px" name="bndescription_1st" class="form-control" placeholder="First paragraph Bangla"></textarea>
            </div>
        
			 
            <div class="form-group">
                <strong>2nd paragraph:</strong>
                <textarea style="height:150px" name="description_2nd" class="form-control" placeholder="2nd paragraph"></textarea>
            </div>
			
			            <div class="form-group">
                <strong>2nd paragraph Bangla:</strong>
                <textarea style="height:150px" name="bndescription_2nd" class="form-control" placeholder="2nd paragraph Bangla "></textarea>
            </div>
        
			 
            <div class="form-group">
                <strong>Third paragraph:</strong>
                <textarea style="height:150px" name="description_3rd" class="form-control" placeholder="3rd paragraph"></textarea>
            </div>
			
			            <div class="form-group">
                <strong>Third paragraph Bangla:</strong>
                <textarea style="height:150px" name="bndescription_3rd" class="form-control" placeholder="3rd paragraph Bangla"></textarea>
            </div>
        
			 
            <div class="form-group">
                <strong>Fourth paragraph:</strong>
                <textarea style="height:150px" name="description_4th" class="form-control" placeholder="Fourth paragraph"></textarea>
            </div>
			
			            <div class="form-group">
                <strong>Fourth paragraph Bangla :</strong>
                <textarea style="height:150px" name="bndescription_4th" class="form-control" placeholder="Fourth paragraph Bangla"></textarea>
            </div>
       
		
			 
            <div class="form-group">
                <strong>Fifth paragraph :</strong>
                <textarea style="height:150px" name="description_5th" class="form-control" placeholder="Fifth paragraph"></textarea>
            </div>
			
			            <div class="form-group">
                <strong>Fifth paragraph Bangla:</strong>
                <textarea style="height:150px" name="bndescription_5th" class="form-control" placeholder="Fifth paragraph Bangla"></textarea>
            </div>
			
			
				            <div class="form-group">
                <strong>Slogan 1:</strong>
                <textarea style="height:150px" name="slogan_1" class="form-control" placeholder="Slogan 1"></textarea>
            </div>
			
			
				            <div class="form-group">
                <strong>Slogan 1 Bangla:</strong>
                <textarea style="height:150px" name="bnslogan_1" class="form-control" placeholder="Slogan 1 Bangla"></textarea>
            </div>
			
			
				            <div class="form-group">
                <strong>Slogan 2:</strong>
                <textarea style="height:150px" name="slogan_2" class="form-control" placeholder="Slogan 2"></textarea>
            </div>
			
			
				            <div class="form-group">
                <strong>Slogan 2 Bangla:</strong>
                <textarea style="height:150px" name="bnslogan_2" class="form-control" placeholder="Slogan 2 Bangla"></textarea>
            </div>
			
					            <div class="form-group">
                <strong>Starting Date:</strong>
                <textarea style="height:150px" name="starting_date" class="form-control" placeholder="Starting Date"></textarea>
            </div>
			
			
					            <div class="form-group">
                <strong>Starting Date Bangla:</strong>
                <textarea style="height:150px" name="bnstarting_date" class="form-control" placeholder="Starting Date Bangla"></textarea>
            </div>
			
			      <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
       







        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection