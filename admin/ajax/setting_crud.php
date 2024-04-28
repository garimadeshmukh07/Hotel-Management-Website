<?php

    require('../inc/essentials.php'); 
    require('../inc/db_config.php'); 
    adminlogincheck();

    if (isset($_POST['get_general'])) {
        $q = "SELECT * FROM `settings` where `sr.no`=?";
        $values = [1];
        $ress = select($q,$values,"i");
        $data= mysqli_fetch_assoc($ress);
        $jsondata = json_encode($data);
        echo $jsondata;
    }

    if (isset($_POST['updt_general'])) {
            $frm_data = filteration($_POST);
            $q = "UPDATE `settings` SET `web_title`=?,`web_about`=? WHERE `sr.no`=?";
            $values = [$frm_data['web_title'],$frm_data['web_about'],1];
            $res = update($q,$values,"ssi");
            echo $res;
    }

    if (isset($_POST['updt_shutdown'])) {
        $frm_data =( $_POST['updt_shutdown']==0) ? 1 : 0 ;
        $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr.no`=?";
        $values = [$frm_data,1];
        $res = update($q,$values,"ii");
        echo $res;
}

if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` where `sr_no`=?";
    $values = [1];
    $ress = select($q,$values,"i");
    $data= mysqli_fetch_assoc($ress);
    $jsondata = json_encode($data);
    echo $jsondata;
}
if (isset($_POST['updt_contact'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `contact_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`tw`=?,`fb`=?,`insta`=?,`iframe`=? WHERE `sr_no`=?";
    $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['tw'],$frm_data['fb'],$frm_data['insta'],$frm_data['iframe'],1];
    $res = update($q,$values,"sssssssssi");
    echo $res;
}
if (isset($_POST['add_member'])) {
    $frm_data = filteration($_POST);
   $img_r = uploadimage($_FILES['picture'],aboutfolder);
   if($img_r == 'inv_img'){
    echo $img_r;
   }
   else if($img_r == 'inv_size'){
    echo $img_r;
   }
   else if($img_r == 'updt_failed'){
    echo $img_r;
   }
   else{
    $q ="INSERT INTO `teams_details`(`name`, `picture`) VALUES (?,?)";
    $values = [$frm_data['name'], $img_r];
    $ress = insert($q,$values,"ss");
    echo $ress;
   }
}
?>