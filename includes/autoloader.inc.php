<?php

    spl_autoload_register('myAutoloader');

    function myAutoloader($className) {
        $pathPrefix = "classes/";
        $pathSuffix = '.class.php';
        $fullPath = $pathPrefix.$className.$pathSuffix;

        if (!file_exists($fullPath)) {
            # code...
            return false;
        }

        include_once $fullPath;
    }
?>