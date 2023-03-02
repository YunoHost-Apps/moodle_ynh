<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = '__DB_NAME__';
$CFG->dbuser    = '__DB_USER__';
$CFG->dbpass    = '__DB_PWD__';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbsocket'  => '',
    'dbport'    => '',
);

$CFG->wwwroot   = 'https://__DOMAIN__';
$CFG->dataroot  = '__DATA_DIR__';
$CFG->admin = 'admin';

$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php'); // Do not edit

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!