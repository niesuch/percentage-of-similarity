<?php

require_once(dirname(dirname(__FILE__)) . '../lib/StringSimilarity.php');

$string1 = 'This is StringSimilarity lib test.';
$string2 = 'This is test.';

$stringSimilarity = new StringSimilarity($string1, $string2);
$stringSimilarity->compare();

echo 'Percentage of similarity: ' . $stringSimilarity->getPercentage() . '%';
