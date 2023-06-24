<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    //connection with database
    $connection = new mysqli('localhost','root','','project');
    if($connection->connect_error){
        die('connection failed: '.$connection->connect_error);
    }
    else{
        $statement = $connection->prepare("insert into registration(firstName,lastName,date,gender,email,password,number)values(?,?,?,?,?,?,?)");
        $statement->bind_param("ssisssi",$firstName,$lastName,$date,$gender,$email,$password,$number);
        $statement->execute();
        echo "<center><b>Registration Successfully</b><center>";
        $statement = closedir();
        $connection = closedir();
    }
?>