@extends('Latest_properties.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Events </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('eventcreate.create') }}"> Create New Properties</a>
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
            <th>Title</th>
            <?php $i=1; ?>
            <th width="280px">Action</th>
        </tr>
        @foreach ($eventcration as $e)
        <tr>
            <td>{{$i }}</td>
            <td><img src="/image/{{ $e->image }}" width="100px"></td>
            <td>{{ $e->title }}</td>
            
			
			
            <td>
                <form action="{{ route('eventcreate.destroy',$e->id) }}" method="POST">
   
              
    
                    <a class="btn btn-primary" href="{{ route('eventcreate.edit',$e->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
		
		<?php $i++; ?>
        @endforeach
    </table>

    
      
@endsection