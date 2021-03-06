<?php
    session_start();
    require("private/autoload.php");
    //include("functions.php");

    $user_data = check_login($conn);
    $id = $_SESSION['login_id'];
    $sql = "SELECT employee_fname, employee_lname, employee_phone, employee_email, employe_address, employee_dob FROM employee_info WHERE login_id = $id";
    $result = mysqli_query($conn, $sql);
    $userInfo = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //implode(' ', $userInfo);
    //print_r($userInfo);
    mysqli_free_result($result);
   // mysqli_close($conn);
?>  

<!doctype html>
<html class="no-js" lang="">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>

  </script>
  
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/Colab.css">
  <link rel="stylesheet" href="css/Tasks.css">
  <link rel="stylesheet" href="css/Chat.css">
  <link rel="stylesheet" href="css/Sidebar.css">
  <link rel="stylesheet" href="css/Profile.css">
  <link rel="stylesheet" href="css/UserData.css">
  <link rel="stylesheet" href="css/Login.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">


  <meta name="theme-color" content="#fafafa">
</head>
<body>

  <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
    <a href="logout.php" class="logout">Log out</a>
    <a href="#" onclick="openPro()"><span><i class="material-symbols-outlined md-36">
      account_circle</i><span class="icon-text">Profile</span></a>
    <a href="#" onclick="openDat()"><span><i class="material-symbols-outlined md-36">
      monitoring</i><span class="icon-text">User Data</span></a>
    <a href="#" onclick="openCal()"><span><i class="material-symbols-outlined md-36">
      calendar_month</i><span class="icon-text">Calendar</span></a>
    <a href="#" onclick="openTeam()"><span><i class="material-symbols-outlined md-36">
      group</i><span class="icon-text">Teams</span></a>
    <table class="TaskList"></table>
  </div>

  <div id="main" class="viewport" >

    <div id="employee_info" class="Profile">
      <div class="circle"></div>
      <p class="letter"><?php echo $_SESSION['username'][0]; ?></p>
      <p class="name"><?php echo $_SESSION['username']; ?></p>

      <div class="card-body">
        <div class="row">
          <h6 class="head">Full Name</h6>
          <div class="tail"><?php foreach ($userInfo as $value1) {
    if (isset($value1['employee_fname'])) {
        echo $value1['employee_fname'];
        print_r($userInfo);
    }
}?></div>
        </div>
        <hr>
        <div class="row">
          <h6 class="head">Date of Birth</h6>
          <div class="tail"> 12/02/2000</div>
        </div>
        <hr>
        <div class="row">
          <h6 class="head">Email</h6>
          <div class="tail"> fip@jukmuh.al</div>
        </div>
        <hr>
        <div class="row">
          <h6 class="head">Phone</h6>
          <div class="tail"> (239) 816-9029</div>
        </div>
        <hr>
        <div class="row">
          <h6 class="head">Address</h6>
          <div class="tail"> Bay Area, San Francisco, CA</div>
        </div>
      </div>
      <table class="AllTasks"></table>
    </div>

    <div class="UserData" >
      <table class="UserData" ></table>
    </div>

    <div class="CalInput" action="insert.php" method="post">
      <input type="text" placeholder="Add Title" name="projdesc" class="calText" >
      <input type="date" class="calDate">
      <input type="time" class="calTimeFrom">
      <p class="calP">-</p>
      <input type="time" class="calTimeTo">
      <select class="calTeam">
      </select>
      <input type="submit" class="calSub" onclick="calSub()">
    </div>

    <div class="TeamInput">
      <input type="text" placeholder="Add Title" class="TeamText">
      <input type="date" class="TeamDate">
      <input type="time" class="TeamTimeFrom">
      <p class="TeamP">-</p>
      <input type="time" class="TeamTimeTo">
      <input type="submit" class="TeamSub" onclick="TeamSub()">
    </div>

    <div class="calPage">
      <table class="calendar" ></table>
    </div>

  </div>

  <script src="js/Calendar.js"></script>
  <script src="js/Colab.js"></script>
  <script src="js/Tasks.js"></script>
  <script src="js/Chat.js"></script>
  <script src="js/Sidebar.js"></script>
  <script src="js/UserData.js"></script>
  <script src="js/NewTeams.js"></script>
  <script src="js/Profile.js"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>

</body>




<!--Login-->
<!--<body>-->

<!--    <form method="post">-->

<!--    <div class="container">-->
<!--      <h2>Login</h2>-->

<!--        <label for="uname"><b>Username</b></label>-->
<!--        <input type="text" placeholder="Enter Username" name="uname" required>-->

<!--        <label for="psw"><b>Password</b></label>-->
<!--        <input type="password" placeholder="Enter Password" name="psw" required>-->

<!--        <button type="submit">Login</button>-->
<!--        <label>-->
<!--        <input type="checkbox" checked="checked" name="remember"> Remember me-->
<!--        </label>-->
<!--    </div>-->

<!--    <div class="container" style="background-color:#f1f1f1">-->
<!--        <button type="button" class="cancelbtn">Cancel</button>-->

<!--    </div>-->
<!--    </form>-->

<!--</body>-->



<!--SignUp-->
<!--<body>-->
<!--<div class="SI">-->
<!--    <h2>Signup</h2>-->

<!--    <form method="post">-->

<!--    </div>-->
<!--    <div class="container">-->

<!--        <label for="fname"><b>First Name</b></label>-->
<!--        <input type="text" placeholder="Enter First Name" name="fname" required>-->

<!--        <label for="minit"><b>Middle Initial</b></label>-->
<!--        <input type="text" placeholder="Enter Middle Initial" name="minit" required>-->

<!--        <label for="lname"><b>Last Name</b></label>-->
<!--        <input type="text" placeholder="Enter Last Name" name="lname" required>-->

<!--        <label for="tel"><b>Phone Number</b></label>-->
<!--        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone # (Ex: 123-456-7890)" name="tel" required>-->

<!--        <label for="addr"><b>Home Address</b></label>-->
<!--        <input type="text" placeholder="Enter Home Address" name="addr" required>-->

<!--        <label for="city"><b>City</b></label>-->
<!--        <input type="text" placeholder="Enter City" name="city" required>-->

<!--        <label for="state"><b>State</b></label>-->
<!--        <input type="text" placeholder="Enter State" name="state" required>-->

<!--        <label for="dob"><b>Date Of Birth</b></label>-->
<!--        <input type="date" placeholder="Enter DOB (Format: MM-DD-YYYY)" name="dob" required>-->

<!--        <label for="uname"><b>Username</b></label>-->
<!--        <input type="text" placeholder="Create Username" name="uname" required>-->

<!--        <label for="psw"><b>Password</b></label>-->
<!--        <input type="password" placeholder="Create Password" name="psw" required>-->

<!--        <label for="email"><b>Email</b></label>-->
<!--        <input type="email" placeholder="Enter Email" name="email" required>-->


<!--        <button type="submit">Signup</button>-->
<!--        <label>-->
<!--        <input type="checkbox" checked="checked" name="remember"> Remember me-->
<!--        </label>-->
<!--    </div>-->

<!--    <div class="container" style="background-color:#f1f1f1">-->
<!--        <button type="button" class="cancelbtn">Cancel</button>-->
<!--    </div>-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->

</html>

