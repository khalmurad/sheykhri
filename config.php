<?php

error_reporting(E_ALL);
ini_set('memory_limit', '-1');
ini_set('max_input_time', '300');
ini_set('max_execution_time', '600');

/**
 * Class-larni avtomatik ravishda ulaymiz.
 * Bir nechta require-ga hojat yo'q.
 */
spl_autoload_register(function($className) {
    $classFile = __DIR__."/classes/{$className}.php";
    if (file_exists($classFile))
    {
        require_once $classFile;
    }
});
