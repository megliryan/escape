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
    <title>Room 3</title>
</head>
<body>
    <h1>Keep Moving Forward</h1>
    <a href="index.php"><img src="images/carl.jpg" alt="carl"></a>
    <a href="index.php"><img src="images/goob.jpg" alt="goob"></a>
    <a href="room4.php"><img src="images/cornelius.jpg" alt="cornelius"></a>
    <a href="index.php"><img src="images/wilbur.jpg" alt="wilbur"></a>
</body>
</html>