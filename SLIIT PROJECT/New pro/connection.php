
<?php
$server="localhost";
$user_name="root";
$password="";
$database="birthdaymember";


$connection = mysqli_connect('localhost' , 'root' , '' , 'birthdaymember');
if($connection){
	mysqli_select_db($connection,$database);

}else{
	die(mysql_error());
}



?>