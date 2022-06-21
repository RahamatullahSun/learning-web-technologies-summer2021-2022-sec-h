<?php
$userId = $_REQUEST['userId'];

$file = fopen('user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($userId == trim($user[0])) {
			$userName = trim($user[2]);
            $userId = trim($user[0]);
            $userType =  trim($user[3]);
			break;
		}	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
		<h2>Profile</h2>
		<a href="adminHome.php"> Go Home </a>
		<br>

		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>User Type</td>
			</tr>
<?php
	
      echo'  <tr>';
        echo'<td>'.$userId.'</td>';
        echo'<td>'.$userName.'</td>';
        echo'<td>'.$userType.'</td>';

      echo'   </tr>';


?>
		</table>
</body>
</html>