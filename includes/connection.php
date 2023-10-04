<?php
$conn=mysqli_connect("localhost","root","root") or die(mysqli_error($conn));
mysqli_select_db($conn,"cargo") or die(mysqli_error($conn));
?>
