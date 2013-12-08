<?php
require_once('include/config.php');

$message = new Message($config);
$MessageDAO = new MessageDAO();
$a = $MessageDAO->getAllMessages($_POST);

?>
<html>
	 <?php include'include/header.php'; ?>
	 <head><link rel="stylesheet" type="text/css" href="include/style.css"></head>
	<title></title><br>
	
<body>
	
	<div class = "body">
	<div class = "div2">
			<table border = "1" class = "tab">
				<tr>
					<td width = "250px">Name</td>
					<td width = "400px">Message</td>
					<td width = "100px">Date</td>
   
				</tr>
				<?php

if(mysql_num_rows($a)>0){
    while($row= mysql_fetch_array($a)){
		if($row['is_approved'] == "y"){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['date_posted']?></td>
    </tr>
<?php       
     
       
}

else{
   
    continue;
}
}
}


?>

</table>
		</div>
		<div class = "div1">
		<form  name = "messages" action="add.php" method="post">
		Fullname: <input type="text" name="name"><br><br>
		 Message:<textarea type="text" name="message"  rows="6" cols= "30" style="resize:none">message:</textarea><br><br>
		Email:	 <input type="text" name="email"><br><br>
				 <input type="submit" value="Submit" onclick = "return validate()">
				 <input type="reset" value="Reset">
		</form>   
	 </div>
	 <script>
		function validate(){
		var a=document.forms["messages"]["name"].value;
		var b=document.forms["messages"]["message"].value;
		var c=document.forms["messages"]["email"].value;
		if (a==null || a==""){
			alert("name must be filled out");
			return false;
		}
		if (b==null || b==""){
			alert("Message must be filled out");
			return false;
		}
		if (c==null || c==""){
			alert("email must be filled out");
			return false;
		}
    }
    </script>
	 </div>
	 </center>
</body>
</html>
