<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$Cpassword = $_REQUEST['Cpassword'];
$userName = $_REQUEST['name'];
$userType = $_REQUEST['userSelect'];
$fname = $_REQUEST['fname'];

if($id == null || $password == null || $userName == null){
	echo "null ID/password/name...";
}elseif ($password != $Cpassword) {
    echo "Password Doesn't Match";
}
else{
		$user = $id."|".$password."|".$userName."|".$userType."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
			header('location: Login.html');					
    
}


?>