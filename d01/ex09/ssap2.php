#! /usr/bin/env php
<?php
$grabstuff = $argv[0];
function getchartype($c)
{
    if (ctype_alpha($c)) // if letter, type 0
        return 0;
    if (ctype_digit($c)) // if number, type 1
        return 1;
    else                 // if special character, type 2
         return 2;
}
// return value of cmp is 1 if UNSORTED, -1 if SORTED, 0 if SAME
function cmp($a, $b)
{
    $i = 0;
    $a = strtolower($a); // switch both to lower so that sort disregards case
    $b = strtolower($b);
    $shorter = min(strlen($a), strlen($b)); // find end of the shorter string
    while ($i < $shorter && ($a[$i] == $b[$i])) // setting i to the first different character
        $i++;
    if ($i == $shorter && strlen($a) == $shorter) // check if one string has ended & the other hasn't
        return -1;    
    if ($a[$i] && $b[$i])
    {
        $aChartype = getchartype($a[$i]);
        $bChartype = getchartype($b[$i]);
        if($aChartype > $bChartype)            // if chartype of first is greater, pair is NOT sorted
            return 1;                
        else if($aChartype < $bChartype)     // if chartype of second is greater, pair IS sorted
            return -1;
        else if($aChartype == $bChartype)    // if chartype is the same, sort on the character level
        {
            if($a[$i] > $b[$i])
                return 1;
            if($a[$i] < $b[$i])
                return -1;
            if($a[$i] == $b[$i])
                return 0;
        }
    }
}

array_shift($argv);
foreach($argv as $value)
{
    $grabstuff .= ' ';
    $grabstuff .= $value;
}

$everything = explode(' ', $grabstuff);
    array_shift($everything); //remove first element from array and return value of removed element
    natcasesort($everything); //sorts in natural order
    usort($everything, "cmp"); //sorts using the cmp function.
    foreach($everything as $thing) //print everything one at a time.
    {
        echo "$thing\n";
    }
?>