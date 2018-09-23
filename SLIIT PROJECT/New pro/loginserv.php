<?php
$error = '';//variable to store error message
if(isset($_POST['submit'])){
    if (empty($_POST['username']) || empty($_POST['password'])){
        $error = "username or password is invalid";

    }
    else
    {
        //define $user and $pass
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $conn = mysqli_connect("localhost" , "root" , "");

        $db = mysqli_select_db($conn , "registration");

        $query = mysqli_query($conn , "SELECT * from users WHERE pass='$pass' AND user ='$user'");

        $rows = mysqli_num_rows($query);
        if($rows == 1){
            header("location:welcome.php");

        }
        else {
            $error = "USername or password is invalid";

        }
        mysqli_close($conn);
    }
}
?>