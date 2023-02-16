@extends('products.layout')
@section('sidebar')
    @parent
@endsection 
 
@section('content')

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   <h1> Message List <h1>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            
            <th>Name </th>
			<th>Title </th>
			<th>Message </th>
			<th>Phone Number </th>
			<th>Date </th>
          
           
        </tr>
        @foreach ($msg as $message)
        <tr>
            <td>{{ ++$i }}</td>
      
            <td>{{ $message->name }}</td>
			<td>{{ $message->title }}</td>
			<td>{{ $message->body }}</td>
			<td>{{ $message->mobile }}</td>
			<td>{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</td>
          
          
        </tr>
        @endforeach
    </table>
  
    {!! $msg->links() !!}
      
@endsection