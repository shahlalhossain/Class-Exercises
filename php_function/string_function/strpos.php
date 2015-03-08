<?php
$myString = 'abc';
$findMe   = 'a';
$pos = strpos($myString, $findMe);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findMe' was not found in the string '$myString'";
} else {
    echo "The string '$findMe' was found in the string '$myString'";
    echo " and exists at position $pos";
}
?>
