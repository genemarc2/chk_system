<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `stud_info` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: stud_info.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error( $conn );
}