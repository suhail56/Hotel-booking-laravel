{{View::make('manager')}}
<html>
<head>
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
<th>Name</th>
<th>Address</th>
<th>Mobile</th>
<th>Checkin</th>
<th>Checkout</th>
<th>Roomid</th>
<th>Roomname</th>
</tr>
@foreach($ab as $qw)
<tr>
<td>{{$qw->id}}</td>
<td>{{$qw->name}}</td>
<td>{{$qw->address}}</td>
<td>{{$qw->phone}}</td>
<td>{{$qw->checkin}}</td>
<td>{{$qw->checkout}}</td>
<td>{{$qw->roomid}}</td>
<td>{{$qw->roomname}}</td>
</tr>
@endforeach
</table>
</body>
</html>