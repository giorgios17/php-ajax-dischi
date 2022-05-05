<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Php Ajax Dischi</title>
</head>

<body>
    <div class="container">
        <?php 
            foreach($dbSong as $song){
                echo "<div class='gs-card'>";
                echo '<img class="cardImg w-75" src="' . $song["poster"] .      '"alt="immagine" />';
                echo "<h5>" . $song["title"] . "</h5>";
                echo "<p>" . $song["author"] . "</p>";
                echo "<p>" . $song["year"] . "</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>

</html>