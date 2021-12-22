<?php
    include 'db_connection.php';

    $sql = $conn->query("SELECT * FROM data_students");
    $result = array();

    while ($data = $sql->fetch_assoc()){
        $result[] = $data;
    }

    echo json_encode(array("students"=>$result));

    mysqli_close($conn);
?>