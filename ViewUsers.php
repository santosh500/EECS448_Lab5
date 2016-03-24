<html>
<head>
<title>User Information</title>

</head>
<body>
 	<table border = "1">
	<tr>
	<th>Users</th>
	<tr>

	<?php
  $mysqli=new mysqli("mysql.eecs.ku.edu","pcharles","JesusisLord_300", "pcharles");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query="SELECT user_id FROM Users";
  if($records=$mysqli->query($query))
  {
      echo "<tr>";
    	while($food=$records->fetch_assoc())
    	{
    		echo "<td>".$food["user_id"]."</td>".PHP_EOL;
        echo "<tr>";
    	}
      $records->free();
  }

	$mysqli->close();
  ?>

	</table>
</body>
</html>
