<?php

include "config.php";
$LIST = $_POST["list"];
$ID = $_POST["id"];
mysqli_query($conn, "UPDATE `tbltodo` SET `list`='$List' WHERE Id= $iD ");
header("location:index.php");

?>


