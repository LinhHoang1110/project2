<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generating database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include_once './../model/footer-model.php';

$footer = new Footer();
$tmp = $footer->getSubject();

echo 'abc';

//if($tmp == 'error connection') echo 'error connection';
//else {
//    echo 'error';
//}
?>
<?php
//$servername = "localhost";
//$username = "manhnt";
//$password = "220897";
//$dbname = "vnpTraining";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "<br/>Connected successfully<br/>";
//
//$sql = 'SELECT * FROM vnpTraining.footer';
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo $row;
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();
?>
</body>
</html>