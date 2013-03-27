<?php 

/**
 * Kirby CMS index file
 * This file is located in the main directory of a Kirby site
 * and loads the roots.php if available as well as the kirby/system.php
 *
 * @package Kirby CMS
 */

// get the current dir
$dir = dirname(__FILE__);

// root file 
$rootfile = $dir . DIRECTORY_SEPARATOR . 'roots.php';

// check for a custom roots file
if(file_exists($rootfile)) {
  // load the custom roots file
  $roots = include($rootfile);
} else {
  // fallback roots if the roots file does not exist
  $roots = array(
    'root'         => $dir,
    'root.kirby'   => $dir . 'kirby',
    'root.site'    => $dir . DIRECTORY_SEPARATOR . 'site',
    'root.content' => $dir . DIRECTORY_SEPARATOR . 'content'
  );
}

// try to find the kirby system file
if(!file_exists($roots['root.kirby'] . DIRECTORY_SEPARATOR . 'system.php')) {
  die('The Kirby system could not be loaded');  
} 

// load the system
include($roots['root.kirby'] . DIRECTORY_SEPARATOR . 'system.php');