<?php 

// This File stores all of your funcitons.
// It should be included on your header.php file.


// Version
$v = '1';
define(V, $v);





// Include Path
// All template files go in the /INC/ folder. 
// Use this to call those files —
// include_once( INC . 'filename.php' );
$inc = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"] . 'inc/';
define(INC, $inc);




?>