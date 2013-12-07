<?php
	 
class MessageDAO {
    public function createMessage($data) {
      $name= $data['name'];
      $message = $data['message'];
      $email = $data['email'];
      $is_approved = "n";
       
       return mysql_query("insert message_tb set name='".$name."', message='".$message."', email='".$email."', date_posted = CURRENT_DATE, is_approved = '".$is_approved."'");      
    }

    public static function getMessage($id) {
        
       $query = mysql_query("select * from message_tb order by id asc");
    }				
 
    public static function getAllMessages() {
       
        return mysql_query("select * from message_tb order by id asc");
    }

    public function editMessage($data) {
	   $id = $data['id'];
       $is_approved = $data['approved'];
       return mysql_query("update message_tb set is_approved='".$is_approved."' where id = {$id}");
    }
 
    public static function updateMessage() {
      
       return mysql_query("select * from message_tb where id ='".$_GET['id']."'");
    }

    public static function deleteMessage($id) {
        return mysql_query("delete from message_tb where id ='".$id."'");
    	  
}
}
?>
