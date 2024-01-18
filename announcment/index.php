
<?php
    require_once("../db.php");  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = filter_input(INPUT_POST, "title");
        $description = filter_input(INPUT_POST, "text");
        try {
            $query = $db->prepare(
                "INSERT INTO announcments(title, description, date, author)
            VALUES (:title, :description, :date, :author)"
            );
            $query->execute([
                "title" => "$title",
                'description' => "$description",
                "date" => date("m-d-y"),
                "author" => "author"
            ]);
            echo "announcment was sent";
        } catch (PDOException $ex) {
            echo "Announcment was not sent";
        }
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
    <?php 
        $query = $db->prepare(
            "SELECT * FROM `announcments` WHERE 1"
        );
        $query->execute();
        $announcments = $query->fetchAll();
        foreach($announcments as $announcment) {
            $title = $announcment["title"];
            $description = $announcment["description"];
            $date = $announcment["date"];

            echo '
                <div class="an-container">
                    <p>Title: '.$title.'</p>
                    <p>Description:'.$description.'</p>
                    <p>Date:'.$date.'</p>
                </div>
            ';
            
        }
    ?>
</body>
</html>
    <script defered>
        let role = localStorage.getItem("role");
        const announce = document.getElementById("announce");
        console.log(role);
        if (role === "teacher") {
            announce.innerHTML = `
                <p>Make new announcment</p>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    Title:<input type="text" name="title">
                    Text:<textarea rows="5" cols="33" name="text"></textarea>
                    <input type="submit" value="submit">
                </form>
            `;
        }
    </script>