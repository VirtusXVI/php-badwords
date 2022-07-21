<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $myText = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus iure eveniet, vero quis voluptate ipsum ab corporis. Voluptatum, tempore rem expedita ducimus voluptas impedit ipsum molestias natus rerum sit dolore?";
        $badWord = $_GET['badword'];
        $replacedText = str_replace($badWord,"***",$myText);
        echo $replacedText;
    ?>

</body>
</html>