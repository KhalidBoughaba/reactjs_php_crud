<?php
include 'db_connection.php';

$_POST = json_decode(file_get_contents("php://input"), true);

$name = addslashes(htmlentities($_POST['name']));
$class = addslashes(htmlentities($_POST['class']));
$phone = addslashes(htmlentities($_POST['phone']));

if($_POST === null) {
    $result = "";
} else {
    $sql = $conn->query("INSERT INTO data_students VALUES ('', '$name', '$class', '$phone')");
}

if($sql === TRUE) {
    $result = "Succeed";
} else {
    $result = "Error: " . $sql . "</br>" . $conn->error;
}

echo json_encode($result);
$conn->close();
?>