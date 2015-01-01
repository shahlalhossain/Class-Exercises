//Example #1

<?php
// get contents of a file into a string
$filename = "/usr/local/something.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
?>




//Example #2
<?php
$filename = "c:\\files\\somepic.gif";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename));
fclose($handle);
?>



//Example #3
<?php
// For PHP 5 and up
$handle = fopen("http://www.example.com/", "rb");
$contents = stream_get_contents($handle);
fclose($handle);
?>




//Example #4
<?php
$handle = fopen("http://www.example.com/", "rb");
$contents = '';
while (!feof($handle)) {
    $contents .= fread($handle, 8192);
}
fclose($handle);
?>