<?php
if(isset($_POST['push'])){
    $min = 5;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username)<$min){
        echo "daugiau uz 5 turi but";
    }



}

?>