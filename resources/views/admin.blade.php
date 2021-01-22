<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body{
  background-color:#f2f2f2;
}
.tab{
  width:75%;
  border: 3px solid black;
  margin: auto;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href=''>Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href='bookcontrol'>Bookings</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='adrooms'>Add Room</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='msgs'>Messages</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="nav-link" href='hotelbk' style="color:white;">Home</a>
    </form>
    <form class="form-inline my-2 my-lg-0">
    <a class="nav-link" href='login1' style="color:white;">Logout</a>
    </form>
  </div>
</nav>
<br><br>
<div class="tab">
<table class="table table-striped">
<tr>
<th>Id</th>
<th>Room Name</th>
<th>No of Bed</th>
<th>Facilities</th>
<th>Price</th>
<th>Image</th>
<th>Image2</th>
<th>Image3</th>
<th>Edit</th>
<th>Delete</th>
</tr>
@foreach($ab as $qw)
<tr>
<td>{{$qw->id}}</td>
<td>{{$qw->roomname}}</td>
<td>{{$qw->noofbed}}</td>
<td>{{$qw->facilities}}</td>
<td>{{$qw->price}}</td>
<td><img src="/images/{{ $qw->image}}" width="120" height="80"></td>
<td><img src="/images/{{ $qw->image2}}" width="120" height="80"></td>
<td><img src="/images/{{ $qw->image3}}" width="120" height="80"></td>
<td><a href="{{ route('room.edit', $qw->id) }}">Edit</a></td>
<td><a href='delete/{{ $qw->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>