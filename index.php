<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

$myCalc = new theoAlex\Calculator\Calculator();
echo $myCalc->calculateSum('1', 3.5, 3);
