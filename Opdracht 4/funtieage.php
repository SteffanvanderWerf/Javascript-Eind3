<?php
function calcAge($verjaardag)
{
    $dob = new DateTime($verjaardag);
    $now = new DateTime();

    $difference = $now->diff($dob);

    $age = $difference->y;

    return $age;
}
