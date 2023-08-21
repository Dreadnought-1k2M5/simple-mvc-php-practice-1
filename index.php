<?php
    include 'includes/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $createUser = new UsersContr();
        $createUser->createUser("John", "Harrison", "2000-1-1");
        
        $userView = new UsersView();
        $userView->showUsers("John");
    ?>
</body>
</html>