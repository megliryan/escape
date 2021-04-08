<?php
    function function_alert($message) {
        echo "<script>alert('$message');</script>";
    }
    if(array_key_exists('yesButton', $_POST)) {
        function_alert("Try Again!");
    }
    if(array_key_exists('noButton', $_POST)) {
        function_alert("Try Again!");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Escape</title>
</head>
<body>
    <h1>Can you escape?</h1>
    <form method="post">
        <input type="submit" name="yesButton" value="Yes!">
        <input type="submit" name="noButton" value="No!">
    </form><br><br><br><br><br><br><br><br>
    <a class="hidden" href="room2.php">Next Room!</a>
</body>
</html>