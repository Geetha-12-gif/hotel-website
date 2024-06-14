<?php
    $dsn = "mysql:host=localhost;dbname=hotel";
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into hotellogin(username, password)
        values(?, ?)");
        $stmt->bind_param($username,$password);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>