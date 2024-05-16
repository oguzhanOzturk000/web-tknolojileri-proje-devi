<?php
session_start();
    $_SESSION["loginCheck"]=false;
    sleep(1);
    header("Location: index.php");

?>