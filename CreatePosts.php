<html>
<head>


</head>
<body>
  <?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "pcharles", "JesusisLord_300", "pcharles");

  if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
  }

  $aid1=$_POST['aid'];
  $cont1=$_POST['cont'];
  $query="SELECT user_id FROM Users WHERE user_id='$aid1'";
  $result=$mysqli->query($query);
  $name2=$result->fetch_assoc();
  if(empty($cont1))
  {
      echo "<td>"."Post is empty. "."</td>".PHP_EOL;
  }
  else if(empty($name2))
  {
      echo "<td>"."No author id in the database"."</td>".PHP_EOL;
  }
  else
  {
      $query = "INSERT INTO Posts (author_id,content) VALUES ('$aid1','$cont1')";
  }
  if ($result = $mysqli->query($query))
  {
      echo "<td>"."Post has been added"."</td>".PHP_EOL;
  }
  else
  {
      echo "<td>"."Post is not added"."</td>".PHP_EOL;
  }
  $mysqli->close();
  ?>
</body>
</html>
