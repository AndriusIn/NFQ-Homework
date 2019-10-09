<?php
require 'vendor/autoload.php';

function calculateHomeWorkSum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$newLine = "\n";

echo 'calculateHomeWorkSum: ' . calculateHomeWorkSum(3, 2.2, '1');
echo $newLine;
echo 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: ' . \Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1');
echo $newLine;
echo 'Nfq\Akademija\Soſt\calculateHomeWorkSum: ' . \Nfq\Akademija\Soſt\calculateHomeWorkSum(3, 2.2, '1');
echo $newLine;
echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ' . \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
?>
