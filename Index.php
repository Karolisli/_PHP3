<?php

$zodziai = [
    'Petras', 
    'lauke', 
    'ryte', 
    'prie', 
    'Maxima',
    'bananai'
    ];

    $atrinkti_zodiai = rand(0, count ($zodziai) - 1);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php echo $zodziai[$atrinkti_zodiai];?>
</html>
