<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <title>project_3</title>
</head>
<body>
    
    <div class="div-icon">
        <a href="index1.php"><i class="fa fa-ellipsis-h" style="font-size:48px;color:black"></i></a>
    </div>

    <div class="parent">




    <?php

    $datas = [["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"] , ["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"] ,["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"],["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"],["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"],["src" => "./assets/images/images2.jpg" , "title" => "iphone 12" , "des" => "massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat interdum varius" , "price" => "30$" , "off" => "27$"]];


    foreach ($datas as $data) {
        echo "<div class='card'>".
         "<img src='$data[src]' alt='image'>".
         "<h3>$data[title]</h3>".
         "<p>$data[des]</p>".
         "<div class='div-peice'>".
         "<p>price =></p>".
         "<div class='price'>";

        if (isset($data["off"])) {
            echo "<p class='red'>$data[price]</p>";
            echo "<p class='green'>$data[off]</p>";
        }
        else {
            echo "<p class='green'>$data[price]</p>";
        }

        echo '</div>' . '</div>' .'</div>';
    }

    ?>


    </div>

</body>
</html>