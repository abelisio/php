<?php
class HappyNumber {
    private $seen;

    function isHappyNumber($num) {
        $this->seen = array();

        while ($num != 1 && !in_array($num, $this->seen)) {
            array_push($this->seen, $num);
            $num = $this->sumOfSquaredDigits($num);
        }

        return $num == 1;
    }

    function sumOfSquaredDigits($num) {
        $sum = 0;

        while ($num > 0) {
            $digit = $num % 10;
            $sum += $digit * $digit;
            $num = floor($num / 10);
        }

        return $sum;
    }
}

$happyNumber = new HappyNumber();
$num = 8;

if ($happyNumber->isHappyNumber($num)) {
    echo "O Número $num é um número feliz.";
} else {
    echo "O Número $num não é um número feliz.";
}
