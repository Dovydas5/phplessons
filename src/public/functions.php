<?php include 'db.php';
?>

<?php

function showdata(){
    global $conn;
    try {
        $query = "SELECT * FROM users";
        $sth = $conn->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }


    foreach ($result as $results) {
        $id = $results['id'];
        echo "<option value='$id'>$id</option>";
    }
}
