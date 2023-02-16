@extends('sitedescription.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	            <div class="pull-left">
                <h2>Site Description</h2>
            </div>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Favicon</th>
			<th>Apple-touch-icon</th>
            <th>Metanmae</th>
            <th>Metadescription</th>
			<th>Frist name tite</th>
			<th>Last name tite</th>
			

            <th width="280px">Action</th>
        </tr>
        @foreach ( $site as $sitedes )  
        <tr>
		
      <td>{{ ++$i }}</td> 
		   
		
            <td><img src="/image/{{ $sitedes->favicon }}" width="100px"></td>
			<td><img src="/image/{{ $sitedes->appletouchicon }}" width="100px"></td>
			
			
            <td>{{ $sitedes->metanmae }}</td>
			<td>{{ $sitedes->metadescription }}</td>
			<td>{{ $sitedes->fristnametite }}</td>
			<td>{{ $sitedes->lastnametite }}</td>
			
            
            <td>
			
			                <form action="{{ route('sitedescription.destroy',$sitedes->id) }}" method="POST">
   
                 
    
                    <a class="btn btn-primary" href="{{ route('sitedescription.edit',$sitedes->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
			

            </td>
        </tr>
      @endforeach 
    </table>
	
	<?php 
	if ( $i == 0 )
	{ ?>
		    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sitedescription.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
		
<?php 	}
	
	
	?>
  
  {!! $site->links() !!}
      
@endsection