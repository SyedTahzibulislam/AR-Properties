@extends('service.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Servie   </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('service.create') }}"> Create </a>
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
            
            <th>Description First para </th>
			<th>Description Second para </th>
			<th>Description Third para </th>
			<th>Description Fourth para </th>
			<th>Description Fifth para </th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($serv as $services)
        <tr>
            <td>{{ ++$i }}</td>
       
            <td>{{ $services->description_1st }}</td>
			<td>{{ $services->description_2nd }}</td>
			<td>{{ $services->description_3rd }}</td>
			<td>{{ $services->description_4th }}</td>
			<td>{{ $services->description_5th }}</td>
          
            <td>
                <form action="{{ route('service.destroy',$services->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('service.show',$services->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('service.edit',$services->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $serv->links() !!}
      
@endsection