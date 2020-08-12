<?php
require 'vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Create new Plates instance
$templates = new League\Plates\Engine('templates');

// Render a template
echo $templates->render('profile', ['name' => 'Santiago', 'test' => 'testing this']);
?>