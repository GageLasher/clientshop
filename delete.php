<?php
require('dbconnection.php');
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
    header("location: index.php");
    exit;
}