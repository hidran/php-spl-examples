<?php

//SPLOpenDirectoryIterator
$dir = 'data/';
//if (is_dir($dir)) {
//    $handle = opendir('data');
//    while (false !== ($entry = readdir($handle))) {
//        echo $entry . (is_file($dir . $entry) ? 'FILE' : 'DIR') . PHP_EOL;
//    }
//}

try {
    $dirIterator = new DirectoryIterator($dir);
    /**
     * @var SplFileInfo $fileInfo
     */
    foreach ($dirIterator as $fileInfo) {
        $isDir = $fileInfo->isDir();
        if ($fileInfo->isDot()) {
            continue;
        }
        echo $fileInfo->getFilename() . ',' . ($isDir ? 'DIR' : 'FILE') . PHP_EOL;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
