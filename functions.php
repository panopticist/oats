<?php 

// This File stores all of your funcitons.
// It should be included on your header.php file.


// Version
$v = '1.1';
define(V, $v);

// Path to Root dir
$root = 'http://' . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]);
define(ROOT, $root);

// Include Path
// All template files go in the /INC/ folder. 
// Use this to call those files —
// include_once( INC . 'filename.php' );
$inc = $_SERVER["DOCUMENT_ROOT"] . dirname($_SERVER["PHP_SELF"]) . '/inc/';
define(INC, $inc);


?>