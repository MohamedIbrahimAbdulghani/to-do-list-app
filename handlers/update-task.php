<?php 

require_once "../functions/app.php";

    $ID = $_POST["id"];
    $title = $_POST["title"];
    $result = updateTasks($ID, $title);

    if($result):
        $_SESSION["success"] = "Data updated successfully";
        header("Location: ../index.php");
        
    else:
        $_SESSION["error"] = "Data not updated";
        header("Location: ../index.php");
    endif;