<?php
include_once("../controller/usercheck.php");
include_once("../controller/info.php");
?>

<center>
<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="login.html">Logout</a>
</center>