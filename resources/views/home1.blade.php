{{View::make('home')}}
<!-- <?php
echo "rooms";
?> -->
<html>
<head>
<style>
.footer {

   width: 100%;
   background-color:#262626;
   color: white;
   text-align: center;
}
.bgtext{
background-color: rgb(0,0,0);
background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  position: absolute;
  top: 52.9%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  text-align: center;
  width:100%;
  height:80%;
}
.text-block {
  position: absolute;
  top: 100px;
  left: 180px;
  color: white;
  border-right: 3px solid white;
  padding:15px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: white; 
  border: 3px solid white;
  background: transparent;
  font-size: 20px;
  float: left;
}
.button1:hover{
   background-color:#009933;
}
</style>
</head>
<body>
<div>

<img src="/images/asdfadsf.jpg" style="width:100%;height:80.3%;border:4px solid;">
<div class="bgtext">
<div class="text-block">
    <h1 style="text-align: left;font-family: cursive;font-size: xxx-large;">Spend Your Dream <br>Holidays With Us</h1><br>
    <p style="text-align: left;    font-size: 22;font-family: serif;">Live and feel like a local in  your <br> own luxary rooms <br> Book Your Stay</p>
    <form action='roomviewdb'>
    <button class="button button1">Book Now</button>
    </form>
  </div>
</div></div>
<div class="footer">

  <div class="footer-copyright text-center py-3">© 2020 Copyright:Hotel Booking | All rights reserved.
  </div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</body>
</html>