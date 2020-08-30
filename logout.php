<?php
    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        header("Location:index.php");
    }
?>