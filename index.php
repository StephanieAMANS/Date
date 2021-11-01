<?php
    $presentTime = new DateTime('NOW');
    $destinationTime = new DateTime();

    $presentTime->getTimestamp();
    echo 'Present time is ' . $presentTime->format('M d Y A G:i') . '</br>';

    $destinationTime->setDate(2029, 7, 29)->setTime(12, 19);
    echo 'Destination time is ' . $destinationTime->format('M d Y A G:i') . '</br>';

    $intervalDate = date_diff($presentTime, $destinationTime);
    echo 'Time interval between these 2 dates is ' . $intervalDate->format('%Y years, %m months, %d days, %h hours and %i minutes') . '</br>';

    $intervalMinute = $intervalDate->days * 24 * 60;
    echo 'Time interval in minutes between the 2 dates is ' . $intervalMinute . ' minutes.' . '</br>';

    $fuelLiters = $intervalMinute / 100000;
    echo 'The amount of fuel required for the trip will be ' . $fuelLiters . 'liters.' . '</br>';