@extends('Latest_properties.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')

   <?php  $i=0; ?>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <h2 style="text-align:center; color:red;">Nonapproved Comments </h2>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            
            <th>Name </th>
	
			<th>Comment </th>
			<th>Phone Number </th>
			<th>Date </th>
          
           
        </tr>
        @foreach ($unapprovecomment as $unapprovecomment)
        <tr>
            <td>{{ ++$i }}</td>
      
            <td>{{ $unapprovecomment->name }}</td>
			
			<td>{{ $unapprovecomment->body }}</td>
			<td>{{ $unapprovecomment->mobile }}</td>
			<td>{{ \Carbon\Carbon::parse($unapprovecomment->created_at)->format('d/m/Y')}}</td>
			
			            <td>
                <form action="{{ route('showcomment.destroy',$unapprovecomment->id) }}" method="POST">
 
                    <a class="btn btn-primary" href="{{ route('showcomment.edit',$unapprovecomment->id) }}">Approve</a>
                    @csrf
                    @method('DELETE')
      
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          
          
        </tr>
        @endforeach
    </table>
	
	<br><br>
	<h2 style="text-align:center; color:red;">Approved Comments </h2>
	
	
	  <table class="table table-bordered">
        <tr>
            <th>No</th>
            
            <th>Name </th>
	
			<th>Comment </th>
			<th>Phone Number </th>
			<th>Date </th>
          
           
        </tr>
        @foreach ($approvecomment as $approvecomment)
        <tr>
            <td>{{ ++$i }}</td>
      
            <td>{{ $approvecomment->name }}</td>
			
			<td>{{ $approvecomment->body }}</td>
			<td>{{ $approvecomment->mobile }}</td>
			<td>{{ \Carbon\Carbon::parse($approvecomment->created_at)->format('d/m/Y')}}</td>
			
			            <td>
                <form action="{{ route('showcomment.destroy',$approvecomment->id) }}" method="POST">
 
                    
                    @csrf
                    @method('DELETE')
      
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          
          
        </tr>
        @endforeach
    </table>
  

      
@endsection