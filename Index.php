<?php

$hack = filter_input_array(INPUT_POST, [
    'hack_me' => FILTER_SANITIZE_ENCODED,
    ]);

?>
<html>
    <body>
        <form method="post">
            <input type="text" name="hack_me" placeholder="Hack Me" required>
            <button name="button" value="push">Try</button>
        </form>
    </body>
</html>