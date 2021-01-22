<!-- <a href='mgrbookview'>Back</a> -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  width: 100%;
}

.container {
  padding: 16px;
  width: 30%;
  border: 3px solid #f1f1f1;
  margin-left: 500px;
  margin-top: 150px;
}
body {
  background-color: lightblue;
}

</style>
</head>
<body>


<form action="{{ route('mgrlogin.store') }}" method="post" enctype="multipart/form-data">
@csrf 
  <div class="container">
  <center><h2>Login</h2></center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>   
    <button type="submit">Login</button>
    @if (session('alert'))
    <div class="alert alert-danger" role="alert">
        {{ session('alert') }}
    </div>
    @endif
  </div>
</form>

</body>
</html>

