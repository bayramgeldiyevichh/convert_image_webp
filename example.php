<?php

include 'ToWebp.php';
// Image
$fullPath = 'img/guller.jpg';
$outPutQuality = 70;

$webp = new ToWebp();

//takes in fullpath,outputQuality,deleteOriginal (true/false)
$result = $webp->convert($fullPath,$outPutQuality,true);

//towebp returns path to new file
print_r($result);

?>