<?php

$x = 0;
$b = &$x;
unset($b);

$b = 1;

print $x; //$x=0

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
