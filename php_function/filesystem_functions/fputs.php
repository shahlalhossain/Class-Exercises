
<?php
//This will create a visitor count for your webpage

$filename = 'sitevisitors.txt';

if (file_exists($filename))
{
    $count = file('sitevisitors.txt');
    $count[0] ++;
    $fp = fopen("sitevisitors.txt", "w");
    fputs ($fp, "$count[0]");
    fclose ($fp);
    echo $count[0];
}

else
{
    $fh = fopen("sitevisitors.txt", "w");
    if($fh==false)
        die("unable to create file");
    fputs ($fh, 1);
    fclose ($fh);
    $count = file('sitevisitors.txt');
    echo $count[0];
}

?>