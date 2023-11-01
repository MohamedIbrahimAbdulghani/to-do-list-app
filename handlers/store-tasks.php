<?php
session_start();
require_once "../functions/app.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["title"])):
    $title = trim(htmlspecialchars(htmlentities($_POST["title"])));
    $res = insertTasks($title);
    $_SESSION["success"] = "Data inserted successfully";
    header("Location: ../index.php");
else:
    $_SESSION["error"] = "please enter task";
    header("Location: ../index.php");
endif;