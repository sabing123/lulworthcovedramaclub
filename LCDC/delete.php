<?php
include("connection.php");
$id = $_GET ['uid'];

$delete = "delete from tbl_registration where id = $id";
mysqli_query($dbconnect, $delete);
	header("location:dashboard.php");

?>