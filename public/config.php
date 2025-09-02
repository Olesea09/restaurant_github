<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");
if (!$conn) {
    echo "database connected" . mysqli_connect_error();
}
?>