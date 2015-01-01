
//Example #1

<?php
function safe_feof($fp, &$start = NULL) {
    $start = microtime(true);

    return feof($fp);
}

/* Assuming $fp is previously opened by fsockopen() */

$start = NULL;
$timeout = ini_get('default_socket_timeout');

while(!safe_feof($fp, $start) && (microtime(true) - $start) < $timeout)
{
    /* Handle */
}
?>





//Example #1

<?php
// if file can not be read or doesn't exist fopen function returns FALSE
$file = @fopen("no_such_file", "r");

// FALSE from fopen will issue warning and result in infinite loop here
while (!feof($file)) {
}

fclose($file);
?>
