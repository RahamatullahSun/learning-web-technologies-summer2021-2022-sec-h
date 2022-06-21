<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user List</title>
</head>
<body>
		<h2>user list</h2>
		<a href="adminHome.php"> Go Home </a>
		<br>

		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>User Type</td>
			</tr>
<?php

$file = fopen('user.txt', 'r');
	
while (!feof($file)) {
    $data = fgets($file);
    $user = explode("|", $data); 

    
      echo'  <tr>';
        echo'<td>'.$user[0].'</td>';
        echo'<td>'.$user[2].'</td>';
        echo'<td>'.$user[3].'</td>';

      echo'   </tr>';

}

?>
		</table>
</body>
</html>
