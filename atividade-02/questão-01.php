<?php
echo "Digite uma string: ";
$entrada = readline();

for ($i = 0; $i < strlen($entrada); $i++) {
    echo $entrada[$i] . PHP_EOL;
}
?>
