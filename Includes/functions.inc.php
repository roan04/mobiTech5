<?php

function emptyInputSignUp($fname,$lname,$email,$password){
    $result ;
    if(empty($fname) || empty($lname) || empty($email) || empty($password)){
        $result = true ; 
    }else{
        $result = false;
    }

    return $result;
}


function emailExist($conn, $email){
    $sql = "SELECT * FROM user WHERE userEmail =  ?;";

    $stmt = mysqli_stmt_init($conn); //Prepare statement 
    if(mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../HTML/register.php?error=emailexist"); //Redirect to register.php and display error invalidpassword
    }

    mysqli_stmt_bind_param($stmt, "s" , $email); 
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysql_fetch_assoc($resultData)){ //fetch data 
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $password){
    $sql = "INSERT INTO user(fanme,lname,email,pwd) VALUES (?,?,?,?)";

    $stmt = mysqli_stmt_init($conn); //Prepare statement 

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../HTML/register.php?error=.."); //Redirect to register.php 
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT) ; //Hash password fpr security password

    mysqli_stmt_bind_param($stmt, "ssss" , $fname,$lname,$email,$hashedPwd); 
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../HTML/register.php?error=none"); 
    exit();
} 

function emptyInputLogin($email,$password){
    $result ;
    if(empty($email) || empty($password)){
        $result = true ; 
    }else{
        $result = false;
    }

    return $result;
}


function loginUser($conn,$email,$password){

   

}
