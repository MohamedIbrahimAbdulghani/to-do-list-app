<?php

require_once "../functions/app.php";

if(isset($_GET["id"])):
    $ID = $_GET["id"];
    $result = selectTaskById($ID);
    if($result):
        $res = deleteTasks($ID);
        $_SESSION["success"] = "Data deleted successfully";
    else:
        $_SESSION["error"] = "Data not exist";
    endif;
    header("Location: ../index.php");

else:
    header("Location: ../index.php");
endif;