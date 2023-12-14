<?php 
    $server = "localhost";
    $username = "root";
    $password ="";
    $db ="testregister";

    $conn = mysqli_connect($server,$username, $password, $db);

    if(!$conn){
        die("Connection failed".mysqli_error($conn));
    }
    //echo "Connection successful";

    if($_SERVER['REQUEST_METHOD']== 'POST'){
        if(isset($_POST['submit'])){
            $uname = $_POST['username'];
            $pass = $_POST['password'];

            $sql = "select * from `Register` where name='$uname' && password='$pass'";
            $result = mysqli_query($conn, $sql);

            if($result){
               // echo "Login successful";
               header('Location:welcome.php');
            }
            else{
                die("Invalid credential".mysqli_error);
            }
        }
    }
?>