<?php

function directoryReader ($directory, array $excludeFiles = ['.', '..']) {

$fileList = [];

if (!is_dir($directory)) {
  return null;
}

if (!($handle = opendir($directory))) {
  return null;
}

while (($fileName = readdir($handle)) !== false) {
  if(in_array($fileName, $excludeFiles)){
    continue;
}
  $fileList[] = $directory . '/' . $fileName;
}

closedir($handle);
return $fileList;
}
