<?php
include_once("../controller/admincheck.php");
include_once("../model/UserModel.php");
$users = getAllUser();

?>
<center>
<body>
	<table border="1" style="width:30%" cellspacing="0" cellpadding="0">
         <tr>
			 <td colspan="4" align="center">Users</td>
		 </tr>
		 <tr>
			 <td>ID</td>
			 <td>NAME</td>
			 <td>USER TYPE</td>
			
		</tr>
		<?php foreach($result as $row): ?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['usertype'] ?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="4" align="right"><a href="admin_home.php">Go Home</a></td>
			</tr>
	</table>
<center>