<?php

if(isset($_POST['submit'])){ //If the post method name Submit is selected 
    //Set the date entered into these variables 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["uname"];
    $password = $_POST["password"];

    //Call following php
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Error handlers function in functions.inc.php

    if(emptyInputSignUp($fname,$lname,$email,$password)!= flase){  //If field is empty 
        header("location: ../HTML/register.php?error=emptyinput");  //Redirect to register.php 
        exit();
    }


    if(emailExist($conn, $email)!= flase){  //If lname is in invalid format
        header("location: ../HTML/register.php?error=emailexist"); //Redirect to register.php and display error invalidpassword
        exit();
    }

    //End of error handlers

    createUser($conn, $fname, $lname, $email, $password) ; //Create new account

}else{
    header("location: .. /HTML/register.php");
    exit();
}