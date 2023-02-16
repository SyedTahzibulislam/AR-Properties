@extends('Latest_properties.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Latest_properties</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('property.create') }}"> Create New Properties</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Address line1</th>
            <th>Address line2</th>
			<th>Price</th>
			<th>Area</th>
			
			<th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pro as $Latest_properties)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $Latest_properties->image }}" width="100px"></td>
            <td>{{ $Latest_properties->address_line1 }}</td>
            <td>{{ $Latest_properties->adress_line2 }}</td>
			<td>{{$Latest_properties->price}}</td>
			<td>{{$Latest_properties->area}}</td>
			
			<td>{{$Latest_properties->description}}</td>
            <td>
                <form action="{{ route('property.destroy',$Latest_properties->id) }}" method="POST">
   
              
    
                    <a class="btn btn-primary" href="{{ route('property.edit',$Latest_properties->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	 <div style= "float:right;" >
	{{$pro->links("pagination::bootstrap-4")}}
  </div>
    
      
@endsection