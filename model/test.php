<?php
$servername = "localhost";
$username = "manhnt";
$password = "220897";
$dbname = "vnpTraining";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn == 'error') echo 'error';
else {

    $getQuantityOfClass = 'SELECT * FROM vnpTraining.post';

    if ($conn == 'error') echo 'error connection';

    $post = mysqli_query($conn, $getQuantityOfClass);
    $result = [];

    while($row = $post->fetch_object()){
        $result[] = $row;
    }

    echo json_encode($result);
}