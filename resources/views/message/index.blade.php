@extends('Latest_properties.layout')

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body{
margin:50px;	
	
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


@section('sidebar')
    @parent
@endsection 


@section('content')

</form>
             
                <h2>Messages </h2>
				<br>
        

        

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
	
	
      <table id="customers">
    
      <tr>
            <th>No</th>
            
            <th>Name </th>
			<th>Title </th>
			<th>Message </th>
			<th>Phone Number </th>
			<th>Date </th>
			<th>Delete</th>
          
           
        </tr>
        @foreach ($msg as $message)
        <tr>
            <td>{{ ++$i }}</td>
      
            <td>{{ $message->name }}</td>
			<td>{{ $message->title }}</td>
			<td>{{ $message->body }}</td>
			<td>{{ $message->mobile }}</td>
			<td>{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</td>
			<td> <a href="{{ route('dltmessage',$message->id) }}" > Delete </a>
            
            
            </td>
        </tr>
        @endforeach
    </table>
	<br>
	</br>
	  <div style= "float:right;" >
	{{$msg->links("pagination::bootstrap-4")}}
</div>

 </body>
  
 </html>
 @endsection
