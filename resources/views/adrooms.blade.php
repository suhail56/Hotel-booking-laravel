<Html>  
<head>   
<style>
.container {  
    padding: 40px;  
    width: 40%; 
  background-color: lightblue;
  margin-left: 370px;
  border: 3px solid #f1f1f1;
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
<center><h2>Add Rooms</h2></center> 
<form action="{{ route('room.store') }}" method="post" enctype="multipart/form-data">  
@csrf 
<label> Room Name </label>         
<input type="text" name="room" required> <br> <br>  
<label> No of Bed: </label>     
<input type="text" name="noofbed" required> <br> <br>  
Facilities  
<br>  
<textarea cols="20" rows="5" name="facilities" required>  
</textarea>  
<br> <br>  
<label> Price: </label>     
<input type="text" name="price" required> <br> <br>
<label> Photos: </label><br> 
<input type="file" name="image" required><br> 
<input type="file" name="image2" required><br> 
<input type="file" name="image3" required>
<br> <br> 
  <button type="submit" class="registerbtn">Add</button>
</form> 
</div> 
</body>  
</html>  