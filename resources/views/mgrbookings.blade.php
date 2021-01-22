{{View::make('manager')}}
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body{
  background-color:#f2f2f2;
}
        </style>
</head>
<body>

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
@endforeach
</table>

</body>
</html>