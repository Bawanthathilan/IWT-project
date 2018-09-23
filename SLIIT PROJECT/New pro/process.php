<?php
//get values passes from form
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent mysql injections
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to the server and select db
mysql_connect("localhost" , "root" , "");
mysql_select_db("registration");

//query the db for user

$result = mysql_query("select * from users where username = '$username' and password = '$password'")
    or die("failed to query database" .mysql_error() );
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $ow['password'] == $password){
    echo "login success !!! welcome" .$row['username'];

}else{
    echo"failed to login";
}
