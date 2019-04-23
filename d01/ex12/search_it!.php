#!/usr/bin/php
<?php
    if ($argc <= 2) {
        return (0);
    }
    $i = 2;
    while ($i < $argc) {
        list($key, $value) = explode(':', $argv[$i]);
        $array[ $key ] = $value;
        $i++;
	}
    if (array_key_exists($argv[1], $array)) {
        print $array[$argv[1]];
        print "\n";
    }
?>
