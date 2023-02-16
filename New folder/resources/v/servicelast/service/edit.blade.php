@extends('products.layout')
@section('sidebar')
    @parent
@endsection 
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Service Content</h2>
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
  
  
  @foreach($service as $service)

  
    <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
       <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="service_name" value="{{ $service->service_name}}" class="form-control" placeholder="Title">
            </div>
			
			                <div class="form-group">
                    <strong>Title Bangla:</strong>
                    <input type="text" name="bnservice_name" value="{{ $service->bnservice_name}}" class="form-control" placeholder="Title Bangla">
            </div>
         
			
			
			          
                <div class="form-group">
                    <strong>First Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_1st" placeholder="Detail">{{ $service->description_1st }}</textarea>
                </div>
        
		
		                <div class="form-group">
                    <strong>First Paragraph Bangla :</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription_1st" placeholder="Detail">{{ $service->bndescription_1st }}</textarea>
                </div>
			
						        
                <div class="form-group">
                    <strong>2nd Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_2nd" placeholder="Detail">{{ $service->description_2nd }}</textarea>
                </div>
				
				        <div class="form-group">
                    <strong>2nd Paragraph Bangla :</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription_2nd" placeholder="Detail">{{ $service->bndescription_2nd }}</textarea>
                </div>
     
			
						          
                <div class="form-group">
                    <strong>3rd Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_3rd" placeholder="Detail">{{ $service->description_3rd }}</textarea>
                </div>
				
				                <div class="form-group">
                    <strong>3rd Paragraph Bangla:</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription_3rd" placeholder="Detail">{{ $service->bndescription_3rd }}</textarea>
                </div>

			
						          
                <div class="form-group">
                    <strong>Fourth Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_4th" placeholder="Detail">{{ $service->description_4th }}</textarea>
                </div>
				
				     <div class="form-group">
                    <strong>Fourth Paragraph Bangla:</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription_4th" placeholder="Detail">{{ $service->bndescription_4th }}</textarea>
                </div>
        
			
						           
                <div class="form-group">
                    <strong>Fifth Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_5th" placeholder="Detail">{{ $service->description_5th }}</textarea>
                </div>
				
				                <div class="form-group">
                    <strong>Fifth Paragraph Bangla:</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription_5th" placeholder="Detail">{{ $service->bndescription_5th }}</textarea>
                </div>
				
						                <div class="form-group">
                    <strong>Slogan 1 :</strong>
                    <textarea class="form-control" style="height:150px" name="slogan_1" placeholder="Detail">{{ $service->slogan_1 }}</textarea>
                </div>
				
									                <div class="form-group">
                    <strong>Slogan 1 Bangla :</strong>
                    <textarea class="form-control" style="height:150px" name="bnslogan_1" placeholder="Detail">{{ $service->bnslogan_1 }}</textarea>
                </div>
				
									                <div class="form-group">
                    <strong>Slogan 2 :</strong>
                    <textarea class="form-control" style="height:150px" name="slogan_2" placeholder="Detail">{{ $service->slogan_2 }}</textarea>
                </div>
				
									                <div class="form-group">
                    <strong>Slogan 2 Bangla :</strong>
                    <textarea class="form-control" style="height:150px" name="bnslogan_2" placeholder="Detail">{{ $service->bnslogan_2 }}</textarea>
                </div>
				
									                <div class="form-group">
                    <strong>Starting date  :</strong>
                    <textarea class="form-control" style="height:150px" name="starting_date" placeholder="Detail">{{ $service->starting_date }}</textarea>
                </div>
				
													                <div class="form-group">
                    <strong>Starting date BANGLA  :</strong>
                    <textarea class="form-control" style="height:150px" name="bnstarting_date" placeholder="Detail">{{ $service->bnstarting_date }}</textarea>
                </div>
       
	   
	   
	   
	                  



					  <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image"  value="/image/{{ $service->image }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $service->image }}" width="300px">
                </div>
			
			
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
	
	@endforeach
	

@endsection