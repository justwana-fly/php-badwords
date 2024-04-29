<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="process.php" method="POST">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="5" cols="40"></textarea><br>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word"><br>
        <input type="submit" value="Invia">
    </form>
</body>
</html>
