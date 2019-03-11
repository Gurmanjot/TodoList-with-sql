<?php
 
  require("conn.php"); 

 $i=$_REQUEST['id'];
 $sql = "DELETE FROM  task WHERE id=$i";
 $db_handle->query($sql);

header("Location: index.php");

?>