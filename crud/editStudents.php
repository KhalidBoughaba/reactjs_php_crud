<?php
include 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$result = '';

if(mysqli_query($conn, $sql)) {
    $result = "Update Succeed";
} else {
    $result = "Update Failed" . musqli_error($conn);
}

echo json_encode($result);
mysqli_close($conn);
?>