<?php
// a] write a program to crate one-dimensional array

$OneDimensionalArray = array("Sumit", "Dubey", "Fyit", 'A', 24);
echo "One Dimensional array: \n";
print_r($OneDimensionalArray);

// b] write a program, displaying various string functions

$NAme = "Sumit";
$year = date("Y");
echo "Converting to string: ",strval($year), "\n";

echo "The Length of string: ", strlen($NAme), "\n";  // it(strlen()) find the number of letters in string
echo"String to lowercase: ", strtolower($NAme), "\n";
echo "String to uppercase: ", strtoupper($NAme), "\n";
echo "String to capitalize: ", ucwords($NAme), "\n";
echo "Replacing String Sumit to Dubey: ", str_replace("Sumit", "Dubey", $NAme), "\n";
echo "\n";

$Sentences = "Hello to you and also me ";
$SentencesToArray = explode(" ", $Sentences);
print_r($SentencesToArray);
echo "\n";

$ArrayToSentences = implode("   ", $SentencesToArray);
echo "Converting array to string: ",$ArrayToSentences, "\n";
echo "Trim function: ", trim($ArrayToSentences);
?>>
