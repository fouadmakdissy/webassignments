<html>
<head>
</head>

<body> 
  <script type="text/javascript" src="validation.js"> </script>
  <script src="jquery-1.11.3.min.js"></script>
<form name="myform" action= "popupform.php" method="post" onsubmit="return validateForm()">
  User name:<br>
  <input type="text" name="username">
  <br>
  First Name:<br>
  <input type="text" name="fname">
  <br>
  Last Name:<br>
  <input type="text" name="lname"><br>
  Email:<br>
  <input type="text" name="email"><br>
  Message:<br>
  <input type="text" name="message"><br>
  <input type="submit" name="submit">

</form>

<?php
if (isset($_POST['submit'])) {

  $username=$_POST['username'];
  $fname=$_POST['fname']; 
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $dbname="website";
  $conn=mysql_connect("localhost", "root", "");
  mysql_select_db($dbname, $conn);
  $sql="INSERT INTO Guests (username, fname, lname, email, message) 
  VALUES ('$username', '$fname', '$lname', '$email', '$message')";

  mysql_query($sql);
  mysql_close($conn);

}
?>


</body> 
</html>
