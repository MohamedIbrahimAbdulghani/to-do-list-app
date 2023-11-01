<?php
session_start();

require_once "db.php";

function insertTasks($title) {
    global $connection_database;
    $sql = "INSERT INTO `tasks` (`title`) VALUES ('$title')";
    $result = mysqli_query($connection_database, $sql);
}


function selectTasks() {
    global $connection_database;
    $sql = "SELECT * FROM `tasks` ";
    $q = mysqli_query($connection_database, $sql);
    $all = [];
    while($result = mysqli_fetch_assoc($q)):
        $all[] = $result;
    endwhile;
    return $all;
}