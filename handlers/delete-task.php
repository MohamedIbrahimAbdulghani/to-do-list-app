<?php

require_once "../functions/app.php";

if(isset($_GET["id"])):
    $ID = $_GET["id"];
    $result = deleteTasks($ID);
        $_SESSION["success"] = "Data deleted successfully";
        header("Location: ../index.php");
else:
    header("Location: ../index.php");
endif;