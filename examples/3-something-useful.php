<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Agent</title>
</head>
<body>
<?php
//    Note: $_SERVER is a superglobal, check that shit out.
    echo '<p>Your Shiny User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
?>

<?php

    if (
        strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') === FALSE
        && strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') === FALSE
        && strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') === FALSE
    ) {
        echo '<p>Your parents brought you up right. Call them now, say thanks, they miss you.</p>';
    } else {
        echo '<p>You\'re using IE... In this day and age</p>';
    }

?>

<?php
// Todo: this with an Array print loop.
//    echo '<p>About to do some mental shit like echo a tonne of reserved vars</p>';
//    echo '<ul>';
//    echo '<li><b>$GLOBALS</b>:' . $GLOBALS . "</li>";
?>
</body>
</html>