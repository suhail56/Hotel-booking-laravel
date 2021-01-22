<Html>  
<head>   
<style>
.container {  
    padding: 40px;  
    width: 40%; 
  background-color: lightblue;
  margin-left: 370px;
}
input[type=text], textarea {  
  width: 100%;  
  padding: 15px;     
  border: none;  
  background: #f1f1f1;  
} 
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  border: none;  
  width: 100%;  
}  
</style>
</head>  
<body  bgcolor="lightblue">
<div class="container"> 
<center><h2>Update Rooms</h2></center> 
<form action="{{ route('room.update',$qw->id) }}" method="post" enctype="multipart/form-data">  
@method('PATCH')
@csrf 
<label> Room Name </label>         
<input type="text" name="room"  value={{$qw->roomname}}> <br> <br>  
<label> No of Bed: </label>     
<input type="text" name="noofbed" value={{$qw->noofbed}}> <br> <br>  
Facilities  
<br>  
<textarea cols="20" rows="5" name="facilities">  {{$qw->facilities}}
</textarea>  
<br> <br>  
<label> Price: </label>     
<input type="text" name="price" value={{$qw->price}}> <br> <br>
<label> Photos: </label><br>
<input type="file" name="image"/>
<img src="/images/{{ $qw->image}}" width="120" height="80">
<input type="file" name="image2"/>
<img src="/images/{{ $qw->image2}}" width="120" height="80">
<input type="file" name="image3"/>
<img src="/images/{{ $qw->image3}}" width="120" height="80">
<br> <br> 
  <button type="submit" class="registerbtn">Update</button>
</form> 
</div> 
</body>  
</html>  