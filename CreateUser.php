<html>
	<head>
            <title> Create User Interface</title>

	</head>
	<body>

            <?php

                $mysqli = new mysqli("mysql.eecs.ku.edu", "pcharles", "JesusisLord_300", "pcharles");

                if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
                }

                $user1=$_POST['input'];
                if(empty($user1))
                {
                    
                }
                else
                {
                    $query = "INSERT INTO Users (user_id) VALUES ('$user1')";
                }

                if ($result = $mysqli->query($query)) {
                    echo "<td>"."New user has been added to Database"."</td>".PHP_EOL;
                }
                else
                {
                    echo "<td>"."This is blank or User already Exists"."</td>".PHP_EOL;
                }

                $mysqli->close();
            ?>

	</body>
</html>
