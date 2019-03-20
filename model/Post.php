<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 20/03/2019
 * Time: 10:00
 */

$rootPath = $_SERVER['DOCUMENT_ROOT'];

require_once $rootPath.'/project2/model/PDO.php';

require_once $rootPath.'/project2/model/post-model.php';

$testPost = new Post();
$abc = $testPost->getAllPost();

//$sql_get_post = "select * from post";
//
//$result = $conn->query($sql_get_post);
//
//if($result === false){
//    die("Error executing the query: $sql_get_post");
//}

$cssPath = "/project2/public/TestPDO.css";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link href='<?php echo $cssPath?>' rel="stylesheet">
</head>
<body>
<h1 style="text-align: center;">Post</h1>

<table style="width: 60%; margin: auto;">
    <tr>
        <th class="header">Title</th>
        <th class="header">Author</th>
        <th class="header">Subject</th>
    </tr>
    <?php while($row = $abc->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>
            <td class="cell-left"><?php echo htmlspecialchars($row['title']); ?></td>
            <td class="cell-center"><?php echo htmlspecialchars($row['author']); ?></td>
            <td class="cell-right"><?php echo htmlspecialchars($row['subject']); ?></td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
