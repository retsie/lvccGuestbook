<?php
require_once('include/config.php');
$editMessage = new Message($config);
$editMessage = MessageDAO::editMessage($_GET['id']);

$is_approved= ($_POST['approved'])?$_POST['approved']:'';
$id = ($_POST['id'])?$_POST['id']:'';
if($editMessage){

    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
    }
	
?>
