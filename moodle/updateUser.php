<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';
global $CFG, $USER, $SESSION, $DB;
require_once($CFG->libdir . '/moodlelib.php');
require_once($CFG->dirroot . '/cohort/lib.php');
require_once($CFG->dirroot . '/group/lib.php');

if(isset($_REQUEST) && $_REQUEST['action'] == 'update')
{
    $username = $_REQUEST['userName'];
    $userEmail = $_REQUEST['userEmail'];
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $userPass = $_REQUEST['userPass'];
    $action = $_REQUEST['action'];
    $updateuser = get_complete_user_data('username', $username);
    $data = new stdClass();
    $data->email = $userEmail;
    $data->firstname = $firstName;
    $data->lastname = $lastName;
    $data->username = $username;
    $data->password = $userPass;
    $data->id = $updateuser->id;
    $data->timemodified = time(); // when we last changed the data in the record

    $DB->update_record('user', $data);
} else if(isset($_POST) && $_POST['action'] == 'insert') {
   
    $username = $_POST['username'];
    $userEmail = $_POST['useremail'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $userPass = $_POST['password'];
    $action = $_POST['action'];

    $record = new stdClass();
    $record->auth = 'wp2moodle';
    $record->confirmed = 1;
    $record->mnethostid = 1;
    $record->username = $username;
    $record->password = $userPass;
//    $record->idnumber = '';
    $record->firstname = $firstName;
    $record->lastname = $lastName;
    $record->email = $userEmail;
    $record->timecreated = time();

    $DB->insert_record('user', $record);
}
