<?php
require_once('include/config.php');
$MessageDAO = new MessageDAO();


if(isset($_POST)) {	
		$a = $MessageDAO->editMessage($_POST);
		if($a){
			echo "<script>alert('Record successfuly saved.');window.location.href='view.php';</script>";
		}else{
			echo "<script>alert('Saving failed.');window.location.href='view.php'</script>";
		}
	}

?>
