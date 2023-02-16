@extends('products.layout')
   
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
  
    <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
   
       <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>1st paragraph (Must fill up and Maximum 100 Characteers):</strong>
                    <input type="text" name="service_name" value="{{ $service->service_name}}" class="form-control" placeholder="Address Line 1">
            </div>
            </div>
			
			
			            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_1st" placeholder="Detail">{{ $service->description_1st }}</textarea>
                </div>
            </div>
			
						            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>2nd Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_2nd" placeholder="Detail">{{ $service->description_2nd }}</textarea>
                </div>
            </div>
			
						            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_3rd" placeholder="Detail">{{ $service->description_3rd }}</textarea>
                </div>
            </div>
			
						            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_4th" placeholder="Detail">{{ $service->description_4th }}</textarea>
                </div>
            </div>
			
						            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Paragraph:</strong>
                    <textarea class="form-control" style="height:150px" name="description_5th" placeholder="Detail">{{ $service->description_5th }}</textarea>
                </div>
            </div>
			
			
			
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection