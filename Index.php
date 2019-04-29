<?php

$zodziai = [
    'Petras', 'lauke', 'ryte', 'prie', 'Maximos', 'pirko', 'giros'
    ];

    $atrinkti_zodiai = rand(0, count ($zodziai) - 1);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>zodziai</title>
    </head>
    <h2>Words</h2>
        <ul>
            <?php foreach($zodziai as $value): ?> 
            <li>
                <?php echo $value; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    <h3>Random word</h3>
    <ul>
        <li>
    <?php echo'*'. $zodziai[$atrinkti_zodiai];?>
        </li>    
    </ul>
</html>
