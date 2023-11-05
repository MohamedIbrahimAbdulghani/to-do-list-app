<?php

require_once "functions/app.php";

$ID = $_GET["id"];
$result = selectTaskById($ID);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Update Page</title>
</head>
<body>
        <div class="container">
                <div class="row">
                    <?php foreach($result as $res): ?>
                    <div class="col-8 mx-auto">
                        <form action="handlers/update-task.php" method="POST" class="form border p-2 my-5">
                            <input type="hidden" name="id" class="form-control my-3 border border-success" placeholder="Id" value="<?php echo $res["id"] ?>" >
                            <input type="text" name="title" class="form-control my-3 border border-success" placeholder="Add" value="<?php echo $res["title"] ?>" >
                            <input type="submit" value="Update" class="form-control btn btn-primary my-3 " >
                        </form>
                    </div>
                    <?php endforeach; ?>
                </div>
        </div>
</body>
</html>
