<?php

require_once __DIR__ . "/environment.php";

if (!function_exists("getFileIteratorFromPath")) {
    function getFileIteratorFromPath($path) {
        return new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path),
            RecursiveIteratorIterator::SELF_FIRST
        );
    }
}

if (!function_exists("deleteFilesBeforeTests")) {
    function deleteFilesBeforeTests($path) {
        foreach (getFileIteratorFromPath($path) as $file) {
            if ($file->getExtension() === "php") {
                unlink($file->getPathname());
            }
        }
    }
}

if (!function_exists("compileFilesBeforeTests")) {
    function compileFilesBeforeTests($path) {
        foreach (getFileIteratorFromPath($path) as $file) {
            if ($file->getExtension() === "pre") {
                $pre = $file->getPathname();
                $php = preg_replace("/pre$/", "php", $pre);

                Pre\Plugin\compile($pre, $php, true, true);
                print ".";
            }
        }
    }
}

if (empty(getenv("BEEPBOOP_AVOID_REBUILD"))) {
    print "Building files" . PHP_EOL;

    deleteFilesBeforeTests(__DIR__ . "/../app");
    compileFilesBeforeTests(__DIR__ . "/../app");

    deleteFilesBeforeTests(__DIR__ . "/../tests");
    compileFilesBeforeTests(__DIR__ . "/../tests");

    print PHP_EOL;
}
