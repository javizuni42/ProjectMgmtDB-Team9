<?php
session_start();
    include("connection.php");
    include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
       //something was posted
      $username =  $_POST['uname'];
      $p_word =  $_POST['psw'];

      if(!empty($username) && !empty($p_word) && !is_numeric($username))
      {
        //save to database
        $login_id = random_num(20);
        $query = "INSERT INTO employee_login (login_id, username, p_word) VALUES ('$login_id', '$username', '$p_word')";

        mysqli_query($conn, $query);

        header("Location: login.php");
        die;

      }
      else
      {
          echo "Please enter valid information!";
      }
      


   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}

  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.signup {
  margin: 15px;
  float:right;
  text-align: center;
  width: auto;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


</style>
</head>
<body>
    <h2>Signup</h2>

    <form method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Signup</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="signup"><a href="login.php">Click to Login</a></span>
    </div>
    </form>    
    
</body>
</html>