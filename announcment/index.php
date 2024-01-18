
<?php
    require_once("../db.php");
    $query = $db->prepare(
        "INSERT INTO announcments(title, description, date, author)
        VALUES (:title, :description, :date, :author)"
    );
    if ($_POST["title"] && $_POST["text"]) {
    $query->execute([
        "title" => "$",
        'description' => "description",
        "date" => date("m-d-y"),
        "author" => "author"
    ]);
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcments</title>
</head>
<body>
    <div id="announce"></div>
</body>
</html>
    <script defered>
        let role = localStorage.getItem("role");
        const announce = document.getElementById("announce");
        console.log(role);
        if (role === "teacher") {
            announce.innerHTML = `
                <p>Make new announcment</p>
                <form method="POST" action="announce.php">
                    Title:<input type="text" name="title">
                    Text:<textarea rows="5" cols="33" name="text"></textarea>
                </form>
            `;
        }
    </script>