<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generating database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "manhnt";
$password = "220897";
$dbname = "vnpTraining";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<br/>Connected successfully<br/>";

// $sql = 'insert into navbar ("class", "subject") values (\'11\', \'["Toán học", "Soạn văn","Sinh học"]\' )';

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
class Abc{
    private $a = 2;

    // public function __construct($a){
    //     $this->a = $a;
    // }

    // private function __construct(){
    //     // never be called
    // }

    public function doubleA(){
        echo 2 * 2;
    }

    public function double($A){
        echo $A * 2;
    }
}

Abc::doubleA();

echo '<br/><br/>';
echo '123<br/>';

$tmp = new ABC();
$tmp->doubleA();

?>
</body>
</html>