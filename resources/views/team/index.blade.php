

<htmL>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
<head>
<body style="margin:60px;">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('team')}}">Team Members</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('sitedescription')}}">Site Description</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('serv')}}">Service</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('property')}}">Properties</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('showmessage')}}">Message</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('showcomment')}}">Comment</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('about')}}">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('slideshow')}}">Slide Show</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{url('CRUD')}}">Users List</a>
        </li>
		<li class="nav-item">
		 <a class="nav-link active" aria-current="page" href= "{{url('logout')}}">Logout</a>
		
		
          
        </li>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>    
</div>

<br><br>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
       
      </ul>
    </div>




<br>

<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Team Members</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('team.create') }}"> Create New Team Members</a>
            </div>
        </div>
    </div></br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   </br> <table class="table table-bordered">
        <tr>
            <th>No</th>
			<th> Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Mobile No:</th>
			<th>Email</th>
		
	
            <th >Action</th>
        </tr>
        @foreach ($team as $t)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $t->image }}" width="100px"></td>
            <td>{{ $t->name }}</td>
            <td>{{ $t->designation }}</td>
			<td>{{$t->mobile}}</td>
			<td>{{$t->email}}</td>
			
            <td>
                <form action="{{ route('team.destroy',$t->id) }}" method="POST">
   
                
                    <a class="btn btn-primary" href="{{ route('team.edit',$t->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
  
  	 <div style= "float:right;" >
	{{$team->links("pagination::bootstrap-4")}}
  </div>



<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   


</body>







