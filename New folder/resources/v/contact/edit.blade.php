@extends('contact.layout')
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
                <a class="btn btn-primary" href="{{ route('contact.index') }}"> Back</a>  
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
  
  @foreach($contact as $contact )
  
    <form action="{{ route('contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email;" value="{{ $contact->email }}" class="form-control" placeholder="Email">
            </div>
			
			  <div class="form-group">
                    <strong>Mobile No :</strong>
                    <input type="tel" name="mobile" value="{{ $contact->mobile }}" class="form-control" placeholder="Mobile NO: ">
            </div>
			
			  
                <div class="form-group">
                    <strong>Facebook :</strong>
                    <input type="text" name="facebook" value="{{ $contact->facebook }}" class="form-control" placeholder="Facebook Link">
            </div>
			
			         <div class="form-group">
                    <strong>Youtube :</strong>
                    <input type="text" name="youtube" value="{{ $contact->youtube }}" class="form-control" placeholder=" Youtube Link ">
            </div>
			
			
				  
            <div class="form-group">
                <strong>Instragram :</strong>
                <input type="text" name="instragram" value="{{ $contact->instragram }}" class="form-control" placeholder="Instragram link ">
            </div>
			
			            <div class="form-group">
                <strong>WhatsApp Number <span style="color:red" >(+88 যুক্ত করবেন। +880171.. এই ফর্মেট এ হবে    ) </span>:</strong> 
                <input type="text" name="whatsappnumber" value="{{ $contact->whatsappnumber }}" class="form-control" placeholder="whatsApp Number ">
            </div>
			
			
	
			
	           		 <div class="form-group">
                    <strong>Prefilled Whatsapp message :</strong>
                    <textarea class="form-control" style="height:150px" name="whatsapptext" placeholder="ডিফল্ট ওয়েলকাম মেসেজ ">{{ $contact->whatsapptext }}</textarea>
                </div>
				
				
			
			            <div class="form-group">
                <strong>Map Location :</strong>
                <input type="text" name="map" value="{{ $contact->map }}" class="form-control" placeholder="Map link ">
            </div>
			
							  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Latitude :</strong><span color="red" >   ( নমুনা ইনপুটঃ 22°50'08.3 - এখানে "N বাদ দিয়ে লিখবেন)   </span>
                <input type="text" value="{{ $contact->latitude }}" name="latitude" class="form-control" placeholder="latitude">
            </div>
        </div>
		
		
							  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Longitude :</strong> <span color="red" >   ( নমুনা ইনপুটঃ 89°31'55.7 - এখানে "Eবাদ দিয়ে লিখবেন)   </span>
                <input type="text" value="{{ $contact->longitude }}"   name="longitude" class="form-control" placeholder="longitude">
            </div>
        </div>
			
			            <div class="form-group">
                <strong>Address :</strong>
                <input type="text" name="address" value="{{ $contact->address }}" class="form-control" placeholder="Address  ">
            </div>
     
		
			  
      
   

           
        
         
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
		</div>
   
    </form>
	@endforeach
@endsection