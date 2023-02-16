@extends('Latest_properties.layout')

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
             
                <h2>Usrers List</h2>
				<br>
        
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('CRUD.create') }}"> Create new User</a>
				
            </div>
			<br>
			<br>
        

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
	
	
      <table id="customers">
    
        <tr>
          
            <th>Id</th>
			<th>Name</th>
			<th>Mobile number</th>
			<th>Email</th>
           
			<th>Address</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
             <td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->mobile_number}}</td>
			<td>{{$user->email}}</td>
			
			<td>{{$user->address}}</td>
            
            <td>
                <form action="{{ route('CRUD.destroy',$user->id) }}" method="POST">
				
   

   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<br>
	</br>
	
	
	<!---------- export import date by Excel ------------------------------------------------------>
	
<div    class="container">
  <div class="row">
    <div class="col-6">
	<div class="col-12">
<div   class="form-group">
<h2 style="color:red;" > Import Data from Excel Sheet.</br></h2> 
<form action="users/import/" method="post" enctype="multipart/form-data" >
@csrf 

<input type="file" name="file" required> <br><br>
<button type="Submit"  class="btn btn-primary"  required>Submit</button>
</div>
</div>
</div>

   <div class="col-6">
	<div class="col-12">
<div    class="form-group">
<h2 style="color:red;" > Export </br></h2> 
<a href="users/export/" >Click here to Export the User list in Excel format </a>

</div>
</div>
</div>




</div>
</div>
 </body>
 </html>
 @endsection
