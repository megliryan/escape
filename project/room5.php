<?php
    if(isset($_POST['numberButton'])) {
        $number = $_POST['number'];

        if($number == 24){
            header("Location: room6.php");
        }else{
            echo "<script>alert('Try Again!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Room 5</title>
</head>
<body>
    <h1>Enter the correct number to move on</h1>
    <form class="center" method="post">
        <input type="text" name="number">
        <button type="submit" name="numberButton">Enter</button>
    </form>
    <div class="tab">
        .<br>
        .<br>
        .<br>
        .<br>
        .<br>
        .<br>
        .<br>
        .<br><br>
        .<br>
        .<br>
        .
    </div>
</body>
</html>