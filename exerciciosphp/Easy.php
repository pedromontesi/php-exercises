<?php

function sum($num1, $num2)
{
    return $num1 + $num2;

}

function area($base, $altura)
{
    return ($base * $altura) / 2;

}

function getLastItem(array $arr)
{
    return end($arr);

}


function check(array $arr, $num)
{
    return in_array($num, $arr, true);
}

function animals($numGalinhas, $numVacas, $numPorcos)
{
    return ($numGalinhas * 2) + ($numVacas * 4) + ($numPorcos * 4);
}

function smallNumber($num1, $num2)
{
    if ($num1 < $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

function findSmallestNumber(array $arr)
{
    return min($arr);

}

function missNumber(array $arr)
{
    $tenNumbers = range(1, 10);
    $missing = array_diff($tenNumbers, $arr);

    return array_values($missing)[0] ?? null;
}

function isChristmas(DateTime $date)
{
   return ($date->format('d') === '25' && $date->format('m') === '12');
}

function isValidEmail($email)
{
    if (!str_contains($email, '@') || !str_contains($email, '.')) {
        return false;
    }


    $parts = explode('@', $email);


    if (count($parts) != 2) {
        return false;
    }

    $user = $parts[0];
    $domain = $parts[1];


    if (strlen($user) < 1) {
        return false;
    }


    if (!str_contains($domain, '.')) {
        return false;
    }


    if ($domain[0] === '.' || substr($domain, -1) === '.') {
        return false;
    }

    return true;
}


?>