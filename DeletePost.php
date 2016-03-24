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

          $arr1=$_POST['box'];
          $number=count($arr1);
          
          foreach($arr1 as $value)
          {
			
			$query = "DELETE FROM Posts WHERE '$value'=post_id";
            $mysqli->query($query);

          }
      		?>



</body>
</html>
