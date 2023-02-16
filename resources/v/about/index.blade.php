@extends('about.layout')

 

@section('sidebar')
    @parent
@endsection 


@section('content')

   <div class="pull-left">
                <h2>About Details</h2>
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

	
		
	
            <th >Action</th>
        </tr>
        @foreach ($abo as $about)
        <tr>
            <td>{{ ++$i }}</td>
          <td><img src="/image/{{ $about->image }}" width="100px"></td>
        <td>{{ $about->description_1st }}</td>
			<td>{{ $about->description_2nd }}</td>
			<td>{{ $about->description_3rd }}</td>
			<td>{{ $about->description_4th }}</td>
			<td>{{ $about->description_5th }}</td>
		
		
		
			
            <td>
                <form action="{{ route('about.destroy',$about->id) }}" method="POST">
   
                 
    
                    <a class="btn btn-primary" href="{{ route('about.edit',$about->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	
	
	<?php   if (  $i == 0)  
	{
		?>
	    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('about.create') }}"> Instert a Contact Address</a>
            </div>
        </div>
    </div>
	
	
	<?php   }   ?>
  
    {!! $abo->links() !!}
      
@endsection