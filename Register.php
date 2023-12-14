<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db= "testregister";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn){
        die("Connection Error".mysqli_connect_error);
    }
   //echo "Connected successfully";
   if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];

        $sql="INSERT INTO `Register` (`name`, `email`, `password`) VALUES ('$uname', '$email', '$pass')";
       
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "data inserted successfully";
        }else{
            die(mysqli_query($conn));
        }
    }

   }
   
?>