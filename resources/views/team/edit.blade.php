@extends('team.layout')
@section('sidebar')
    @parent
@endsection

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit </h2>
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
  
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $team->name }}" class="form-control" placeholder="Name">
            </div>
			
			  <div class="form-group">
                    <strong>নাম :</strong>
                    <input type="text" name="bnname" value="{{ $team->bnname }}" class="form-control" placeholder="নাম ">
            </div>
			
			  
                <div class="form-group">
                    <strong>Designation :</strong>
                    <input type="text" name="designation" value="{{ $team->designation }}" class="form-control" placeholder="Designation">
            </div>
			
			         <div class="form-group">
                    <strong>পদবি  :</strong>
                    <input type="text" name="bndesignation" value="{{ $team->bndesignation }}" class="form-control" placeholder=" পদবি  ">
            </div>
			
			
				  
            <div class="form-group">
                <strong>Mobile :</strong>
                <input type="text" name="mobile" value="{{ $team->mobile }}" class="form-control" placeholder="Mobile No ">
            </div>
			
			            <div class="form-group">
                <strong>Email :</strong>
                <input type="email" name="email" value="{{ $team->email }}" class="form-control" placeholder="Email  ">
            </div>
     
		
			  
      
   

           
        
            
                <div class="form-group">
                    <strong>Image:</strong> <span style="color:red;">( Max-Height:300px  )</span>
                    <input type="file" name="image"  value="/image/{{ $team->image }}" class="form-control" placeholder="image"> 
                    <img src="/image/{{ $team->image }}" width="300px">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
		</div>
   
    </form>
@endsection