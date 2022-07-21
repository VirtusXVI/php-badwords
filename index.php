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
        $myText = "Lorem ipsum";
        $badWord = $_GET['badword'];
        $myTextLength = strlen($myText);
        $replacedText = str_replace($badWord,"***",$myText);
        $replacedTextLength = strlen($replacedText);
    ?>
    <div>
        Stringa: <?php echo $myText . " / Lunghezza: " . $myTextLength; ?>
    </div>
    <div>
        -------------------------------------------------
    </div>
    <div>
        Stringa Modificata: <?php echo $replacedText . " / Lunghezza: " . $replacedTextLength; ?>
    </div>
</body>
</html>