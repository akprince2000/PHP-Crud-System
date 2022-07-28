<?php    

 $id=$_GET['uid']; 
 $conn = new mysqli("localhost","root","","pencilbox");
 $conn->query("DELETE FROM tbl_data_input WHERE id='$id'");

header("location: index.php");

?>