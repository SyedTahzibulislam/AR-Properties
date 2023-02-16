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
	

  
    <form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address  1:</strong>
                    <input type="text" name="address_line1" value="{{ $property->address_line1 }}" class="form-control" placeholder="Address Line 1">
            </div>
			
			  <div class="form-group">
                    <strong>Address  1:</strong>
                    <input type="text" name="bnaddress_line1" value="{{ $property->bnaddress_line1 }}" class="form-control" placeholder="Address Line 1">
            </div>
			
			  
                <div class="form-group">
                    <strong>Address  2:</strong>
                    <input type="text" name="adress_line2" value="{{ $property->adress_line2 }}" class="form-control" placeholder="Address Line 2">
            </div>
			
			
			            <div class="form-group">
                <strong> search location:</strong> ( যে কি ওয়ার্ড দিয়ে  সার্চ দিলে স্থানটি পাওয়া যাবে সেটা লিখুন। যেমন ডুমুরিয়া, বয়রা ইত্যাদি। )
                <input type="text" name="searchlocation"  value="{{ $property->searchlocation }}" class="form-control" required>
            </div>
			
			         <div class="form-group">
                    <strong>ঠিকানা ২ :</strong>
                    <input type="text" name="bnadress_line2" value="{{ $property->bnadress_line2 }}" class="form-control" >
            </div>
			
			
				  
            <div class="form-group">
                <strong>Minimum  Price:</strong>
                <input type="text" name="price" value="{{ $property->price }}" class="form-control" placeholder="price ">
            </div>
			
			
			        <div class="form-group">
                <strong> Maximum Price:</strong>
                <input type="text" name="maxprice" value="{{ $property->maxprice }}" class="form-control"  >
            </div>
			
			            <div class="form-group">
                <strong> সর্বনিম্ন মুল্য :</strong>
                <input type="text" name="bnprice" value="{{ $property->bnprice }}" class="form-control" placeholder="মুল্য ">
            </div>
			
								 
            <div class="form-group">
                <strong> সর্বোচ্চ মূল্য :</strong>
                <input type="text" name="maxbnprice"  value="{{ $property->maxbnprice }}" class="form-control">
            </div>
        
     
	
			  
            <div class="form-group">
                <strong>পরিমাণ (শতক ) :</strong> ( শুধু সংখ্যা লিখবেন। যেমনঃ ৫ ) 
                <input type="text" name="area" value="{{ $property->area }}" class="form-control" placeholder="Area ">
            </div>
			
			           <div class="form-group">
                <strong>জমির পরিমাণ :</strong>
                <input type="text" name="bnarea" value="{{ $property->bnarea }}" class="form-control" placeholder="জমির পরিমাণ ">
            </div>
			
			            <div class="form-group">
                <strong>Video:</strong>
                <input type="text" name="video" value="{{ $property->video }}" class="form-control" placeholder="Name">
            </div>   
			
						            <div class="form-group">
                <strong>Google Map:</strong>
                <input type="text" name="map" value="{{ $property->map }}" class="form-control" placeholder="Name">
            </div>  
			
			
			
								 
            <div class="form-group">
                <strong>Latitude :</strong><span color="red" >   ( নমুনা ইনপুটঃ 22°50'08.3 - এখানে "N বাদ দিয়ে লিখবেন)   </span>
                <input type="text" name="latitude" value="{{$property->latitude}}" class="form-control" placeholder="latitude">
            </div>
       
		
		
							 
            <div class="form-group">
                <strong>Longitude :</strong> <span color="red" >   ( নমুনা ইনপুটঃ 89°31'55.7 - এখানে "Eবাদ দিয়ে লিখবেন)   </span>
                <input type="text" name="longitude" value="{{$property->longitude}}" class="form-control" placeholder="longitude">
            </div>
      
   
		
		 <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $property->description }}</textarea>
                </div>
				
						 <div class="form-group">
                    <strong>বিবরণ :</strong>
                    <textarea class="form-control" style="height:150px" name="bndescription" placeholder="Detail">{{ $property->bndescription }}</textarea>
                </div>
           
        
            
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image"  value="/image/{{ $property->image1 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $property->image }}" width="300px">
                </div>
				
								                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image1"  value="/image/{{ $property->image1 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $property->image1 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image2"  value="/image/{{ $property->image2 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $property->image2 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image3"  value="/image/{{ $property->image3 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $property->image3 }}" width="300px">
                </div>
				
				                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image4"  value="/image/{{ $property->image4 }}" class="form-control" placeholder="image">
                    <img src="/image/{{ $property->image4 }}" width="300px">
                </div>
				

				
				
				     <div class="form-group">
                    <strong>Scarch:</strong>
                    <input type="file" name="scratch"  value="/image/{{ $property->scratch }}" class="form-control" placeholder="scratch">
                    <img src="/image/{{ $property->scratch }}" width="300px">
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
		</div>
   
    </form>
	
@endsection