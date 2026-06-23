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

<p>What is 1 - 1?</p>

<form action="results.php" method="post">
    <input type="radio" name="answer" value="1">0
    <input type="radio" name="answer" value="0">2
    <input type="radio" name="answer" value="0">3
    <input type="radio" name="answer" value="0">4
    <input type="submit">
</form>

</body>
</html>

