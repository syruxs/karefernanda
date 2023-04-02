<?php   include("kafer/fer.php");

$user = $_POST['user'];
$pass = sha1($_POST['pass']);

$consulta=mysqli_query($conn,"SELECT * FROM `user` WHERE user='$user' and pass='$pass' AND estado='activo'");

	while($user_result=mysqli_fetch_array($consulta)){
       echo  $name=$user_result['name'];
	}
    session_start();
    $_SESSION['user']=$user;
    header("location:index.php");
    $ip = file_get_contents('https://ifconfig.me/ip');
?>