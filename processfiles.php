<?php
// PROCESS FILES
// Main controller for the Contact Import Program

require_once('config.php');
require_once('processor.class.php');
require_once('db.class.php');

// Initialize key objects
$proc = Processor::initialize();
$db = Database::initialize();

// $dbinfo is loaded from config.php
$db->set_config($dbinfo);

$proc->parse_text_files();