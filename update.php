<?php
	require_once('include/config.php');
	$updateMessage = new MessageDAO();
	$updateMessage = MessageDAO::updateMessage($_GET['id']);
?>
<html>
	<body>
		<div style="border:1px solid;">
			<?print_r($updateMessage);?>
			<form action="edit.php" method="post">
				<input type='hidden' name="id" value="<?=($_GET['id'])?$_GET['id']:''?>">
				<Input type = "radio" name = "approved" value = "n" <?php
				if($updateMessage['is_approved'] == "n"){
				echo "checked";
				}
				?>>NO
				<Input type = "radio" name = "approved" value = "y" <?php
				if($updateMessage['is_approved'] == "y"){
				echo "checked";
				}
				?> >YES
		 
				<input type="submit" value="Update">
				<input type="reset" value="Reset">
			</form>   
			<a href="index.php" >[Back to home]</a>
		</div>
	</body>
</html>
