<html>
<head>
<title>View User Posts</title>

</head>
<body>


    		<?php

    		  $mysqli=new mysqli("mysql.eecs.ku.edu","pcharles","JesusisLord_300", "pcharles");
      		if ($mysqli->connect_errno) {
        	printf("Connect failed: %s\n", $mysqli->connect_error);
        	exit();
      		}

          $food=$_POST['stuff'];
          $query="SELECT content FROM Posts WHERE '$food'=author_id";
          $a=0;
          if($result=$mysqli->query($query))
          {
          	while($row=$result->fetch_assoc())
          	{
          		foreach($row as $value)
          		{
          			$a++;
          			echo $a.". ";
          			echo $value;
          			echo "<br>";
          		}
          		
          	}
          	$result->free();
          }
         
          	$mysqli->close();
      		?>



</body>
</html>
