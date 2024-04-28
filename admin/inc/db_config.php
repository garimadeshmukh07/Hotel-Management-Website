<?php

$hname= 'localhost';
$uname ='root';
$pass='';
$db ='hotelmgmtdb';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die("Cannot connect to db".mysqli_connect_error());
}

// filtered data 
function filteration($data){
    foreach ($data as $key => $value) {
       $data[$key]= trim($value);
       $data[$key]= stripslashes($value);
       $data[$key]= htmlspecialchars($value);
       $data[$key]= strip_tags($value);
    }

    return $data;
}

// prepare 

function select($sql, $values ,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt =mysqli_prepare($con,$sql)) 
    {
        # code...
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query not executed -select");
        }
    }
    else{
     
        die("Query not prepared -select");
    }

}

function update($sql, $values ,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt =mysqli_prepare($con,$sql)) 
    {
        # code...
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query not executed -update");
        }
    }
    else{
     
        die("Query not prepared -update");
    }

}

function insert($sql, $values ,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt =mysqli_prepare($con,$sql)) 
    {
        # code...
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query not executed -insert");
        }
    }
    else{
     
        die("Query not prepared -insert");
    }

}



?>