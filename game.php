<?php
$POST = $_POST['choose'];
$rand = rand (0,10);

if ($rand == $POST)
    echo "Ви вгадали";
else
    echo "Ви не вгадали";
echo $rand;