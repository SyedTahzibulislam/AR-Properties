@extends('Latest_properties.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('serv.create') }}"> Create New Service</a>
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
            <th>service Name</th>
			

			
			<th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($serv as $ser)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $ser->image }}" width="100px"></td>
            <td>{{ $ser->service_name }}</td>
			<td>{{ $ser->description_1st }}</td>
           
            <td>
                <form action="{{ route('serv.destroy',$ser->id) }}" method="POST">
   
              
    
                    <a class="btn btn-primary" href="{{ route('serv.edit',$ser->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <div style= "float:right;" >
  {{$serv->links("pagination::bootstrap-4") }}
  
  </div>

      
@endsection