<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rickpat.css">
</head>
<body>

<form action=”index.php” method=”post”>
    <label for="name">Namn:</label>
    <input type=”text” name=”name” id=”name” required placeholder=Skriv ditt namn”></input>

    <label for="num">Nummer:</label>
    <input type=”number” name=”num” id=”num”></input>

    <label for="check">Ja eller nej:</label>
    <input type=”checkbox” name=”check” id=”check”></input>

    <textarea name=”name” id=”text” cols=”30” rows=”20”>Skriv här om du kan</textarea>
    <button type=”submit” value=”skicka” name=”btn”>Skicka?</button>
</form>

</body>
</html>