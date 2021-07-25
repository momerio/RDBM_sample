<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Test</title>
</head>

<body>
    <?php require("database.php"); ?>

    hoge
    <?php
    $result = db("test.db");
    echo $result;
    ?>

    <?php

    // $db = new SQLite3('test.db');
    // $stmt = $db->prepare('SELECT * FROM tbl1 WHERE two>=:two');
    // $stmt->bindValue(':two', 15, SQLITE3_INTEGER);
    // $result = $stmt->execute();
    // if ($result !== false) {
    //     while ($arr = $result->fetchArray()) {
    //         echo '<pre>';
    //         var_export($arr);
    //         echo '</pre>';
    //     }
    // }

    // echo 'データベース完了';

    ?>
</body>

</html>