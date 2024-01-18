<?php
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
?>