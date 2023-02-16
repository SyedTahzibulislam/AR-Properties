@extends('Latest_properties.layout')
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
	

  
    <form action="{{ route('eventcreate.update', $eventcration->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title :</strong>
                    <input type="text" name="title" value="{{ $eventcration->title }}" class="form-control" placeholder="Title">
            </div>
			
  <input type="hidden" name="hidden" value="{{ $eventcration->id }}" class="form-control" >
   
		
		 <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $eventcration->description }}</textarea>
                </div>

           
        
            
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image"  value="/image/{{ $eventcration->image1 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $eventcration->image }}" width="300px">
                </div>
				
								                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image1"  value="/image/{{ $eventcration->image1 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $eventcration->image1 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image2"  value="/image/{{ $eventcration->image2 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $eventcration->image2 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image3"  value="/image/{{ $eventcration->image3 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $eventcration->image3 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image4"  value="/image/{{ $eventcration->image4 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $eventcration->image4 }}" width="300px">
                </div>
				

				
				

            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
		</div>
   
    </form>
	
@endsection