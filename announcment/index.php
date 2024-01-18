
<?php require_once("../db.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcments</title>
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require_once("../header/header.php");?>
    <main>    
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require_once("post.php");
            }   
        ?>
        <div id="announce"></div>
        <?php 
        require_once("display.php");
        ?>
    </main>
</body>
</html>
<script src="checkRole.js" defer></script>