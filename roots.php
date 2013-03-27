<?php 

// get the current directory
$dir = dirname(__FILE__);

// return all custom roots for this installation
return array(
  'root'         => $dir,
  'root.kirby'   => $dir . DIRECTORY_SEPARATOR . 'kirby',
  'root.site'    => $dir . DIRECTORY_SEPARATOR . 'site',
  'root.content' => $dir . DIRECTORY_SEPARATOR . 'content'
);