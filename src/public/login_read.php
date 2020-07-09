<?php include "db.php";?>

<?php
    try {
        $sql = "SELECT * FROM users";
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">

<div class="col-xs-6">

    <?php
    foreach ($result as $results){
    ?>
    <pre>
        <?php
        print_r($results);
    }
    ?>
        </pre>



</div>
</div>

</body>
</html>
