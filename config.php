<?php
ini_set("display_errors", 0);

$dir = 'images/largeImages'; // Sti til folderen med billeder
$maxwidth = '150'; // in Pixels
$maxheight = '100'; // in Pixels
$title = 'Billeder fra lejligheden'; // Titel på billedgalleri
$subtitle = 'Vejlegårdsparken 48,1,18 - 2665 Vallensbæk Strand'; // Undertitel på billedgalleri

$dirHandle = opendir($dir);
$count = -1;
$returnstr = "";
while ($file = readdir($dirHandle)) {
    if(!is_dir($file) && strpos($file, '.jpg')>0) {
        $count++;
        $image[$count] = $file;
    }
}
$column=0;
$maxcolumns = $maxcolumns-2;
closedir($dirHandle);
?>



