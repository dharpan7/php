<html>
<body>
	<span><a href="index.php">HOME <br> </a> <a href="new.php">NEW CONTACT</a></span>
</body>
</html>
<?php
require("mysqli_connect.php");
$q1="SELECT * FROM customers";
$r1=mysqli_query($dbc,$q1);
while($row = mysqli_fetch_array($r1)){
    echo"<div> Entered Username is:{$row['firstname']}Entered Username is:{$row['lastname']} <br> Entered Email_id is:{$row['email']} <br> Entered Phone number is :{$row['creditcard']}</div>";
   
    echo"<br>";
}

?>