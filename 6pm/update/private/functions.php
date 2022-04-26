<?php

function check_login($conn) 
{

    if(isset($_SESSION['login_id']))
    {
        $id = $_SESSION['login_id'];
        $query = "SELECT * FROM employee_login WHERE login_id = $id limit 1";

        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }

    //redirect to login
    header("Location: login.php");
    die;


}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) { 
        # code...
        $text .= rand(0,9);
    }
    return $text;

}
function user_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
