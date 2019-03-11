<?php
require("conn.php"); 
?>

<?php
$sql = "INSERT INTO  task (caption, is_completed)
VALUES ('$_POST[item]', '0')";

if ($db_handle->query($sql) === TRUE) 
{ 
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $db_handle->error;
}
$$db_handle->close();
?>