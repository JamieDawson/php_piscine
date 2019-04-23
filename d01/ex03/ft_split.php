#!/usr/bin/php
<?php
function ft_split($string)
{
    $exploded = explode(" ", $string); //split each empty space
    $filtered = array_filter($exploded);//filters array
    $sliced = array_slice($filtered, 0);//applies filter to new array.
    sort($sliced); //sorts array
    return $sliced;
}
?>
