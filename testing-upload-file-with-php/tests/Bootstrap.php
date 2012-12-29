<?php

namespace Library;

/*
 * Set error reporting to the level to which Es code must comply.
 */
error_reporting(E_ALL | E_STRICT);

/*
 * Determine the root, library, and tests directories of the framework
 * distribution.
 */

chdir(dirname(__DIR__));
require('./Library/Upload.php');

/**
 * Overwrite here php functions
 */
function is_uploaded_file($filename)
{
    //Check only if file exists
    return file_exists($filename);
}

function move_uploaded_file($filename, $destination)
{
    //Copy file
    return copy($filename, $destination);
}
