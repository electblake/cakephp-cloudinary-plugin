<?php

App::uses('Folder', 'Utility');

$cachePath = CACHE . 'cloudinary' . DS;
$cacheDir = new Folder($cachePath, true, 0755);
Cache::config('cloudinary', array(
  'engine' => 'File',
  'duration' => '+12 hours',
  'probability' => 100,
  'path' => $cachePath,
  'group' => array('cloudinary')
));
