<?php 

require('connection/dbconnect.php');

session_start();

if(isset($_POST['click_login'])){

    $username = $_POST["username"];
    $password = $_POST['password'];

    if($username == '' || $password == '')
    {
        $resp = array(
            'status'    => 0,
            'message'   => 'Please input fields'
        );

        echo json_encode($resp);
    }

    else
    {
        $query = "SELECT username, password FROM useracc WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION['user'] = $username;
            $_SESSION['logged_in'] = true;
    
            $resp = array(
                'status'    => 1,
                'message'   => 'success'
            );
    
            echo json_encode($resp);
    
    
        }
    
        else
        {
            $resp = array(
                'message'   => 'errorrrrrrrrrrr'
            );
    
            echo json_encode($resp);
        }
    }




}

?>