<?php

require_once "../functions/app.php";

if(isset($_GET["id"])):
    $ID = $_GET["id"];
    $title = $_POST["title"];
    $result = selectTaskById($ID);
    $re = updateTasks($title, $ID);
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
                <div class="row">
                    <?php foreach($result as $res): ?>
                    <div class="col-8 mx-auto">
                        <form action="../index.php" method="POST" class="form border p-2 my-5">
                            <input type="text" name="title" class="form-control my-3 border border-success" placeholder="Add" value="<?php echo $res["title"]; ?>">
                            <input type="submit" value="Update" class="form-control btn btn-primary my-3 " >
                        </form>
                    </div>
                    <?php endforeach; ?>
                </div>
        </div>
</body>
</html>
