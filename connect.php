<?php

// database connection
    $servername="localhost:5500";
    $username="root";
    $password="";
    $dbname="registration";
    
    // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

    $conn = new mysqli('localhost:5500','root','','registration');
    if($conn === false){
    
        die("ERROR: Could not connect. " 
        
        . mysqli_connect_error());
        
    }

    $Name = $_REQUEST['Name'];
    $State = $_REQUEST['State'];
    $District = $_REQUEST['District'];
    $Phone = $_REQUEST['Phone'];
    $Address = $_REQUEST['Address'];
    $email = $_REQUEST['email'];
    $password= $_REQUEST['password'];
    $Confirmpassword = $_REQUEST['Confirmpassword'];


    $sql = "INSERT INTO signup  VALUES ('$Name','$State','$District','$Phone','$Address','$email','$password','$Confirmpassword')";
    // insert in database 
// $rs = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    
    echo "details has been saved";
    
}else{
    
    echo "Some error occured.";
    
}

mysqli_close($conn);




?>