<?php

    session_start();

    $_SESSION['updated_score']  = $_SESSION['current_score'] + $_POST['answer'];

    $_SESSION['current_score'] =  $_SESSION['updated_score'];

    echo $_SESSION['current_score'];
?>

<!doctype html>
<html lang="en">
<head>

</head>
<body>

    <p>Your total score is: <?php echo $_SESSION['current_score']; ?> / 3</p>

    <a href="index.php">home</a>

</body>
</html>
