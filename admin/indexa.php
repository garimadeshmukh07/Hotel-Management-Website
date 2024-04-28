<?php
require('inc/essentials.php'); 
 require('inc/db_config.php'); 

 //to not go back and forward without proper credentinals --checkinggg
 session_start();
        if((isset( $_SESSION['adminlogin']) &&  $_SESSION['adminlogin']== true)){
            redirect('dashboard.php');
        }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login Panel</title>
    <?php require('inc/links.php'); ?>

    <style>
        div.loginform{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }

    </style>
</head>
<body class="bg-light">
    <div class="loginform text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="py-3 bg-dark text-white">Admin login Panel</h4>
            <div class="p-4">
                    <div class="mb-3">
                        
                        <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                    </div>
                    <div class="mb-4">
                        
                        <input name="admin_pass" required type="password" class="form-control shadow-none text-center"  placeholder="Password">
                    </div>
                    <button  name="login" type="submit" class="btn text-white  shadow-none customcolor">Login</button>
            </div>
        </form>
    </div>
    


<?php

if(isset($_POST['login']))
{
    $frm_data = filteration($_POST);
    
    $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
    $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

    $ress = select($query,$values,"ss");
   if($ress->num_rows==1){ //got user
            $row= mysqli_fetch_assoc($ress);
            // session_start();
            $_SESSION['adminlogin'] = true;
            $_SESSION['adminid'] = $row['sr.no'];
            redirect('dashboard.php');

   }
   else{
        alert('error', 'Login failed- invalid credentials!');
   }
}

?>


<?php require('inc/scripts.php'); ?>
</body>
</html>