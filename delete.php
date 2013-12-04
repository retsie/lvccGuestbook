<?php
require_once('include/config.php');
$delete = new Message($config);
$delete = MessageDAO::deleteMessage($_GET['id']);

if($delete){

    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
    }
?> 
