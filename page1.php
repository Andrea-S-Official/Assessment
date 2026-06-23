<?php
    session_start();

    $_SESSION['current_score'] = 0;

    echo $_SESSION['current_score'];
?>
<!doctype html>
<html lang="en">
<head>

</head>
<body>

    <p>What is 1+1?</p>

    <form action="page2.php" method="post">
        <input type="radio" name="answer" value="0">1
        <input type="radio" name="answer" value="1">2
        <input type="radio" name="answer" value="0">3
        <input type="radio" name="answer" value="0">4
        <input type="submit">
    </form>

</body>
</html>