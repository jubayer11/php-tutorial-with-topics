<?php
function loader($class)
{
    $filename = $class . '.php';
    $file = 'classes/' . $filename;
    if (!file_exists($file)) {
        return false;
    }
    include $file;
}

spl_autoload_register('loader');
$prod = new Product();
$happy = new Happy();
?>