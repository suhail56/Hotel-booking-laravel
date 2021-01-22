{{View::make('home')}}
<!-- <?php
echo "rooms";
?> -->
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
body{
  background-color:#f2f2f2;
}
.slide{
  margin: auto;
  width: 50%;
  border: 3px solid #000099;
  padding: 15px;
  margin-bottom: 47px;
  margin-top: 33px;
}
.name{
  float: right;
  position: absolute;
  left: 720px;
  font-family: initial;
  
}
.imag{
  
  width:300;
  
  font-family: initial;
}
.fac{
  float: right;
  position: absolute;
  left: 720px;
  font-family: initial;
  padding-top:10;
}
.fac1{
  float: right;
  position: absolute;
  left: 990px;
  font-family: initial;
  padding-top:10;
}

</style>
</head>
<body>@foreach($ab as $qw)
<!-- <div class="container" style="width: 100px; float:left;  margin:100px">
<div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="/images/{{ $qw->image}}" width="110" height="150" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$qw->roomname}}</h5>
    <p class="card-text">No of Bed: {{$qw->noofbed}}<br>Facilities: {{$qw->facilities}}<br><b>Price:₹ {{$qw->price}}</b></p>
    <a href='book/{{ $qw->id }},{{ $qw->roomname }}' class="btn btn-primary">BOOK NOW    </a>
   <u> <a href='imges/{{ $qw->id }}' >Photos    </a></u>
  </div>
</div>
</div> -->

<div class="slide">
<div class="name">
<h1>{{$qw->roomname}}</h1>
</div>
<div class="fac">
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h4><b>Facilities: {{$qw->facilities}}</b></h4>
</div>
<div class="fac">
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h4><b>Bed Available: {{$qw->noofbed}} Bed</b></h4>
</div>
<div class="fac">
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h3 style="color:#002db3;"><b>Price:₹ {{$qw->price}}</b></h3>
</div>
<div class="fac">
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h3><a href='imges/{{ $qw->id }}' class="btn btn-outline-dark">View Photos    </a></h3>
</div>
<div class="fac1">
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h6 style="visibility: hidden;">sdf<br>da</h6>
<h3><a href='book/{{ $qw->id }},{{ $qw->roomname }}' class="btn btn-primary">BOOK NOW    </a></h3>
</div>
<div class="imag">
<img src="/images/{{ $qw->image}}" width="300" height="250" >
</div>

</div>
 @endforeach
</body>
</html>

