@extends('sitedescription.layout')
@section('sidebar')
    @parent
@endsection 
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit </h2>
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
  
  @foreach ($sitedescription as $sitedescription)
    <form action="{{ route('sitedescription.update', $sitedescription->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
    
			
			
			
			 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name of the Site:</strong>
                <input type="text" name="fristnametite" value="{{$sitedescription->fristnametite}}" class="form-control" placeholder="Site first name">
            </div>
			
			            <div class="form-group">
                <strong>Last Name of the Site:</strong>
                <input type="text" name="lastnametite" class="form-control" value="{{$sitedescription->lastnametite}}" placeholder="Site Last name">
            </div>
			
						            <div class="form-group">
                <strong>Site Icon Title :</strong>
                <input type="text" name="siteicontitle" class="form-control" value="{{$sitedescription->siteicontitle}}" placeholder="Site Last name">
            </div>

		       
			 

		
		
					 
            <div class="form-group">
                <strong>Mata Description:</strong>
                <textarea style="height:150px" name="metadescription" class="form-control" placeholder=" Meta Description">{{$sitedescription->metadescription}}</textarea>
            </div>
       
		
						 
            <div class="form-group">
                <strong>Mata Name:</strong>
                <textarea style="height:150px" name="metanmae" class="form-control" placeholder=" Meta Name">{{$sitedescription->metanmae}}</textarea>
            </div>  
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
        
            
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="favicon"  value="/image/{{ $sitedescription->favicon }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $sitedescription->favicon }}" width="300px">
                </div>
				
				
				     <div class="form-group">
                    <strong>Scarch:</strong>
                    <input type="file" name="appletouchicon"  value="/image/{{ $sitedescription->appletouchicon }}" class="form-control" placeholder="scratch">
                    <img src="/image/{{ $sitedescription->appletouchicon }}" width="300px">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
		</div>
   
    </form>
    @endforeach
@endsection