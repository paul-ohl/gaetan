<?php

function getMessage() {
    $message = "mon copain";

    if (isset($_GET['name']) && !empty($_GET['name'])) {
        $message = htmlspecialchars($_GET['name']);
    }

    return "$message";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My super Website</title>
</head>
<body>

<h1>Hello hello!</h1>
<h2>How's it doing?</h2>

<h4>Bonjour <?= getMessage() ?></h4>

<form action="index.php">
    <div>
        <label for="name"></label>
        <input autofocus type="text" id="name" name="name" placeholder="Your Name"/>
        <button type="submit">Send your name!</button>
    </div>
</form>

</body>
</html>
