<html>
<body>
<h2>People who have visited this website:</h2>
	<?php
	$conn=mysql_connect("localhost", "root", "");
	if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db('website');
   $sql ="SELECT * FROM Guests"; 
   $retval = mysql_query( $sql, $conn);
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {
      echo "User: {$row['username']}  <br> ".
         "First Name: {$row['fname']} <br> ".
         "Last Name: {$row['lname']} <br> ".
         "Email: {$row['email']} <br> ".
         "Message: {$row['message']} <br>".
         "--------------------------------<br>";
   }
   
   
   mysql_close($conn); ?>
</body>
   </html>
