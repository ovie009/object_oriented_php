<?php

    spl_autoload_register('myAutoloader');

    function myAutoloader($className) {

        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($url, 'includes') == true) {
            # code...
            $pathPrefix = "../classes/";
        } else {
            # code...
            $pathPrefix = "classes/";
        }
        

        $pathSuffix = '.class.php';
        $fullPath = $pathPrefix.$className.$pathSuffix;

        if (!file_exists($fullPath)) {
            # code...
            return false;
        }

        include_once $fullPath;
    }

?>