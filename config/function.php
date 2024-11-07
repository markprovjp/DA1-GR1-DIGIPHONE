<?php 
    function autoLoadFile ($filePath) {
        $files = array_diff(scandir($filePath), ['.'], ['..']);
        foreach ($files as $file) {
            require_once $filePath.$file;
        }
    }

    function debug($param) {
        echo "<pre>";
        print_r($param);
        die();
    }
