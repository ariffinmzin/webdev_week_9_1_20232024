<?php
    session_start();
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

        echo "Hello ".$_SESSION['name']." <br>";
        echo "You are from " . $_SESSION['program'];

    ?>
    
</body>
</html>