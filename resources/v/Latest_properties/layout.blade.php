<!DOCTYPE html>
<html>
<head>
    <title>A R Properties</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<style type="text/css">
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

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <head>


</head>
	
	
	
	
	<style type="text/css">
    	body{
    		
    		padding: 50px;
    	}
    </style>
</head>
<body>
@section('sidebar')
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('team')}}">Team Members</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('sitedescription')}}">Site Description</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('serv')}}">Service</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('property')}}">Properties</a>
        </li>
						<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('contact')}}">Contact Details</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('showmessage')}}">Message</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('showcomment')}}">Comment</a>
        </li>

		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('about')}}">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('slideshow')}}">Slide Show</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "{{asset('CRUD')}}">Users List</a>
        </li>
		<li class="nav-item">
		 <a class="nav-link active" aria-current="page" href= "{{asset('logout')}}">Logout</a>
		
		
          
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
@show



<div class="container"> 
    @yield('content')
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
</html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </style>
</head>
<body>
  

   
</body>
</html>