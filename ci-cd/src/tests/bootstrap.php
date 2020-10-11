<?php
$files = [
    dirname(__DIR__).'/MyClass.php',
];

foreach ($files as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}