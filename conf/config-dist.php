<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = '__DB_NAME__';
$CFG->dbuser    = '__DB_NAME__';
$CFG->dbpass    = '__DB_PWD__';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4_unicode_ci',
                               
);

$CFG->wwwroot   = 'https://__DOMAIN____PATH__';
$CFG->dirroot   = '__FINALPATH__';
$CFG->dataroot  = '__DATA_PATH__';
$CFG->admin = 'admin';

$CFG->directorypermissions = 02777;

$CFG->lang = '__LANGUAGE__';

$CFG->xsendfile = 'X-Accel-Redirect';
$CFG->xsendfilealiases = array(
    '/dataroot/' => $CFG->dataroot
);

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
