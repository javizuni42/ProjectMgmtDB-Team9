<?php
    session_start();
    require("private/autoload.php");
    //include("functions.php");

    $user_data = check_login($conn);
?>

<!doctype html>
<html class="no-js" lang="">

<head>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">


  <meta name="theme-color" content="#fafafa">
</head>
<body>


  <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
    <a href="#" onclick="openCal()"><span><i class="material-symbols-outlined md-36">
      calendar_month</i><span class="icon-text">Calendar</span></a>
    <a href="#" onclick="openTeam()"><span><i class="material-symbols-outlined md-36">
      group</i><span class="icon-text">Teams</span></a>
    <table class="TaskList"></table>
  </div>

  <div id="main" class="viewport" >
    <div class="calPage">
      <div class="overlay"></div>
      <table class="calendar" ></table>
    </div>
    <div class="TeamPage" style="visibility: hidden">
      <table class="Colab"></table>
      <table class="Tasks"></table>
      <table class="Chat"></table>
    </div>
  </div>

  <script src="js/functions.js"></script>
  <script src="js/Calendar.js"></script>
  <script src="js/Colab.js"></script>
  <script src="js/Tasks.js"></script>
  <script src="js/Chat.js"></script>
  <script src="js/Sidebar.js"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<!--  <script>-->
<!--    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;-->
<!--    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')-->
<!--  </script>-->
<!--  <script src="https://www.google-analytics.com/analytics.js" async></script>-->


</body>

</html>