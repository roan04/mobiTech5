<?php

if(isset($_POST['submit'])){ //If the post method name Submit is selected 
    //Set the date entered into these variables 
    $email = $_POST["uname"];
    $password = $_POST["password"];

     //Call following php
     require_once 'dbh.inc.php';
     require_once 'functions.inc.php';
     
     if(emptyInputLogin($email, $password)!= flase){  //If field is empty 
        header("location: ../HTML/login.php?error=emptyinput");  //Redirect to register.php 
        exit();
    
    }

    loginUser($conn,$email,$password);

}else {

    header("location : ../HTML/login.php");
    exit();
}