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

function CreateTable(){
    if(isset($_POST['submit'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $stmt = $conn->query($sql);
        if(!$stmt){
            die("nope");
        }else
            echo "<h1 class='text-center'>CREATED</h1>";
    }
}
function UpdateTable(){
    global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $id = $_POST['id'];


        $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
        $stmt = $conn->query($sql);
        if(!$stmt){
            die("nope");
        }else
            echo "<h1 class='text-center'>UPDATED</h1>";
}
function DeleteTable(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $id = $_POST['id'];


    $sql = "DELETE FROM users WHERE id = $id";
    $stmt = $conn->query($sql);
    if(!$stmt){
        die("nope");
    }else
        echo "<h1 class='text-center'>DELETED</h1>";
}
