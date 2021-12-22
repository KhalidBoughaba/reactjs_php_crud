<?php
include 'db_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM data_students WHERE id= $id";

$result="";

if($conn->query($sql)===TRUE){
    $result = "Delete Data SUCCESSFUL";
} else {
    $result = "Failed to Delete Data" . $conn -> error;
}

echo json_encode($result);
$conn->close();
?>