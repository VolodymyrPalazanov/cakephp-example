<h1>Adding</h1>
<p>Number 1: <?= $number1 ?></p>
<p>Number 2: <?= $number2 ?></p>
<p>Sum: <?= $sum ?></p>
<?php
if (function_exists('xdebug_info')) {
    echo '<h2>Xdebug Info:</h2>';
    echo '<pre>';
    print_r(xdebug_info());
    echo '</pre>';
}
else 
{
    echo 'no';
}
?>