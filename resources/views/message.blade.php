<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
body{
  background-color:#f2f2f2;
}
            th{
                padding: 10px;
            }
            td{
                padding: 5px;
            }
        </style>
</head>
<body>
<a href='room'>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg></a>
<h2 style="text-align: center;">Messages</h2><br>
<table class="table table-striped">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Delete</th>
</tr>
@foreach($ab as $qw)
<tr>
<td>{{$qw->id}}</td>
<td>{{$qw->name}}</td>
<td>{{$qw->email}}</td>
<td>{{$qw->message}}</td>
<td><a href='deletemsg/{{ $qw->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>