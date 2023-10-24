<?php
include "config.php";
$id = $_GET["ID"];
mysqli_query($conn, "DELETE FROM `tbltodo` WHERE Id = $id");
header("location:index.php");
?>