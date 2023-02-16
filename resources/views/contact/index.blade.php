@extends('contact.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')

   <div class="pull-left">
                <h2>Contact Details</h2>
            </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
			
            <th>Mobile </th>
            <th>Email</th>
          
			
	
		<th>Address</th>
		
	
            <th >Action</th>
        </tr>
        @foreach ($con as $t)
        <tr>
            <td>{{ ++$i }}</td>
          
            <td>{{ $t->mobile }}</td>
            <td>{{ $t->email }}</td>
			
		
		
			<td>{{$t->address}}
			
            <td>
                <form action="{{ route('contact.destroy',$t->id) }}" method="POST">
   
                 
    
                    <a class="btn btn-primary" href="{{ route('contact.edit',$t->id) }}">Edit</a>
   
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
                <a class="btn btn-success" href="{{ route('contact.create') }}"> Instert a Contact Address</a>
            </div>
        </div>
    </div>
	
	
	<?php   }   ?>
  
    {!! $con->links() !!}
      
@endsection