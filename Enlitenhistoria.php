<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <?php
        if(isset($_POST['btn'])){
            $strLink="<a href='".$_POST['link']."'>".htmlentities($_POST['desc'])."</a><br>".$_POST['linx']
        } ?>
        <
        
</body>
</html>