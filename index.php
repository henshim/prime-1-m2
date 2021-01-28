<?php
function primeNum($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "so nguyen to nho hon 100 la: <br>";
for ($i = 0; $i < 100; $i++) {
    if (primeNum($i)) {
        echo $i . '';
    }
}