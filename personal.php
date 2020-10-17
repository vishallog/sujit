<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("project",$conn); 
 if($_SESSION["LoginID"]==true){

 if(isset($_POST["save"])) {

	
		$sql1=mysql_query("INSERT INTO `project`.`personal_info` (`enroll`, `address`, `father_name`, `BG`, `married_status`, `DOB`) VALUES ('".$_POST["enroll"]."','".$_POST["address"]."','".$_POST["father_name"]."','".$_POST["BG"]."','".$_POST["married_status"]."','".$_POST["DOB"]."')");
		$sql2=mysql_query("INSERT INTO `project`.`edu_info` (`enroll`, `edu_field`, `board`, `class`, `marks`) VALUES ( '".$_POST["enroll"]."','".$_POST["edu_field"]."', '".$_POST["board"]."', '".$_POST["class"]."', '".$_POST["marks"]."')");
	

	if (sql1 && $sql2) {
		echo "RECORD INSERTED";
		header("location:index.php");
	}
	else
		echo "NOT INSERTED";
}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form method="post">
 		<input type="number" name="enroll" placeholder="enroll"><br><br>
 		<input type="text" name="address" placeholder="address"><br><br>
 		<input type="text" name="father_name" placeholder="father_name"><br><br>
 		<input type="text" name="BG" placeholder="BG"><br><br>
                <input type="number" name="enroll" placeholder="enroll"><br><br>
 		<input type="text" name="address" placeholder="address"><br><br>
 		<input type="text" name="father_name" placeholder="father_name"><br><br>
 		<input type="text" name="BG" placeholder="BG"><br><br><input type="number" name="enroll" placeholder="enroll"><br><br>
 		<input type="text" name="address" placeholder="address"><br><br>
 		<input type="text" name="father_name" placeholder="father_name"><br><br>
 		<input type="text" name="BG" placeholder="BG"><br><br> 	 
 		<input type="text" name="married_status" placeholder="married_status"><br><br>
 	<input type="text" name="DOB" placeholder="DOB"><br><br>
 		<input type="number" name="enroll" placeholder="enroll" >

 	<input type="text" name="edu_field" placeholder="edu_field"><br><br>
 	<input type="text" name="board" placeholder="board"><br><br>
 	<input type="text" name="class" placeholder="class"><br><br>
 	<input type="text" name="marks" placeholder="marks"><br><br>

 	

 		<input type="submit" name="save" value="save">



 	</form>
 
 </body>
 </html>
	<?php }
else
	include("login.php");
?>
