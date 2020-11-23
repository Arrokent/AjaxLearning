<?php

//print_r($_FILES);

// $_FILES也是一个数组，这里只需要upFile
$fileInfo = $_FILES["upFile"];

$fileName = $fileInfo["name"];
$filePath = $fileInfo["tmp_name"];

echo $fileName;
echo $filePath;

// move file
move_uploaded_file($filePath, "./source/".$fileName);
?>

