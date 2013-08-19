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
require('./Library/Ldap.php');
