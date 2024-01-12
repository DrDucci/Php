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
        if(isset($_POST['btn']))
            $strLink="<a href='".$_POST['link']."'>".htmlentities($_POST['desc'])."</a><br>".$_POST['linx']?>

    <div class="rutan">
        <div class="rubrik"><h1>Din lilla berättelse</h1></div>

        <div id="box">
            <form action="add_issue.php" method="post">
            <label for="title">Titel:</label>
            <input type="text" name="title" required>
        </div>

        <div id="box">
            <label for="description">Skriv din berättelse här:</label>
            <textarea name="description"></textarea>
        </div>

        <div class="knappen">
            <button>Lägg till</button>
        </div>
    </div>
</body>
</html>