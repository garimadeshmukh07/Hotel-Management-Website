<?php

define('uploadimagepath', $_SERVER['DOCUMENT_ROOT'].'/HMWEB/images/');
define('aboutfolder','about/');


function adminlogincheck(){
        session_start();
        if(!(isset( $_SESSION['adminlogin']) &&  $_SESSION['adminlogin']== true)){
            echo"
    <script> window.location.href='indexa.php'; </script>";
        exit;
    }
}

function redirect($url){
    echo"
    <script> window.location.href='$url'; </script>";
    exit;
}



function alert($type , $msg){
    $our_alert= ($type== "success") ? "alert-success" : "alert-danger";
    echo <<<alert
                <div class="alert $our_alert alert-dismissible fade show customalert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
alert;
}


function uploadimage($image, $folder){
$valid_mime = ['image/jpeg','image/png','image/webp'];
$img_mime = $image['type'];

if (!in_array($img_mime,$valid_mime)){
    return 'inv_img'; //invalid img mime or format
}
else if(($image['size']/(1024*1024))>2){
    return 'inv_size'; // invalid size greater than 2mb
}
else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_'.random_int(11111,99999).".$ext";
    $img_path = uploadimagepath.$folder.$rname;
  if ( move_uploaded_file($image['tmp_name'],$img_path)){
    return $rname;
  }
  else{
    return 'updt_failed';
  }
}
}

?>