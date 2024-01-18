<?php
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "text");
    // echo '
    //     <script type="text/javascript">
    //     window.location=window.location;
    //     </script>';
    if ($title && $description) {
        try {
            $query = $db->prepare(
                "INSERT INTO appointments(title, description,  date, author)
                VALUES (:title, :description, :date, :author)"
            );
            $query->execute([
                "title" => "$title",
                'description' => "$description",
                "date" => date("m-d-y"),
                "author" => "author"
            ]);
            echo "Appointment was made";
        } catch (PDOException $ex) {
            echo "Appointment was not made";
            echo $ex;
        }
    }
?>