<Html>  
<head>   
<style>
.container {  
    padding: 40px;  
    width: 40%; 
  background-color: lightblue;
  margin-left: 370px;
  border: 3px solid #f1f1f1;
  position: absolute;
  top:70px;
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
<center><h2>Book Room</h2></center> 

<form action="{{ route('bookcontrol.store') }}" method="post"  enctype="multipart/form-data">  
@csrf 
<label> Name: </label>         
<input type="text" name="name" required> <br> <br>  
Address  
<br>  
<textarea cols="20" rows="5" name="address" required>  
</textarea>  
<br> <br>  
<label> Mobile No: </label>     
<input type="text" name="phone" required> <br> <br>  
<label> Checkin: </label>     
<input type="date" name="checkin" required> <br> <br>
<label> Checkout: </label>
<input type="date" name="checkout" required>
<br> <br> 
<input type="hidden" name="roomid" value={{$id}}>
<input type="hidden" name="roomname" value={{$roomname}} >
  <button type="submit" class="registerbtn">Book</button>
</form> 
</div> 
</body>  
</html>  