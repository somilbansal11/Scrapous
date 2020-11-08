 <?php

session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','','scrap') or die("could not connect to database");

$username = mysqli_real_escape_string($db, $_POST['Name']);
$email = mysqli_real_escape_string($db, $_POST['Email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


if(empty($username)){
	array_push($errors, "Name is required");
}
if(empty($email)){array_push($errors, "Email is required");}
if(empty($password)){array_push($errors, "10 digit password is required");}

$user_check_query = "SELECT * FROM userinfo WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($results);

if($user){
if($user['email'] === $email){array_push($errors, "Email already exists");}

}
if(count($errors) == 0){

$password_md5 = md5($password);
$query = "INSERT INTO userinfo (username, email, password) VALUES('$username', '$email', '$password_md5')";

mysqli_query($db,$query);
$_SESSION['password_2'] = $password_md5;
$_SESSION['success'] = "You are logged in";

header('location: index.php');
}
 ?>
