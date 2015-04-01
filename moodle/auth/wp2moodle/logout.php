<?php
ob_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
global $CFG, $USER, $SESSION, $DB;

require('..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php');
require_once($CFG->libdir.'/moodlelib.php');
require_logout();
header('location: '.$_SERVER['HTTP_REFERER']);
