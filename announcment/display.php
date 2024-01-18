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
                <p class="title">'.$title.'</p>
                <p class="description">'.$description.'</p>
                <p class="date">'.$date.'</p>
            </div>
        ';
        
    }
?>