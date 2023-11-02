<?php
session_start();

require_once "db.php";

// this function to insert new task
function insertTasks($title) {
    global $connection_database;
    $sql = "INSERT INTO `tasks` (`title`) VALUES ('$title')";
    mysqli_query($connection_database, $sql);
}

// this function to select and show the all tasks
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

// this function to delete tasks from database
function deleteTasks($id) {
    global $connection_database;
    $sql = "DELETE FROM `tasks` WHERE `id` = '$id'";
    mysqli_query($connection_database, $sql);
}

// this function to get tasks by id
function selectTaskById($id) {
    global $connection_database;
    $sql = "SELECT * FROM `tasks` WHERE `id` = '$id' ";
    $q = mysqli_query($connection_database, $sql);
    $all = [];
    while($result = mysqli_fetch_assoc($q)):
        $all[] = $result;
    endwhile;
    return $all;
}
// this function to update tasks from database
function updateTasks($title, $id) {
    global $connection_database;
    $sql = "UPDATE `tasks` SET `title`='$title' WHERE `id` = '$id' ";
    $q = mysqli_query($connection_database, $sql);
}