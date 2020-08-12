<?php

include '../vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Create new Plates instance
$templates = new League\Plates\Engine('templates');

// Preassign data to the layout
$templates->addData(['company' => 'The Company Name'], 'layout');

// Render a template
echo $templates->render('profile', ['name' => 'Jonathan']);
