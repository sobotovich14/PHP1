<?php
$a = $_GET['choose'];
$b = rand (0,10);

if ($a == $b){
    echo ("Ви вгадали" .$b);
}else{
    echo ("Ви не вгадали" .$b);
}
