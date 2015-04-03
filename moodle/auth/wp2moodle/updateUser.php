<?php

function create_wp_user(array $user) {

    $conn = new mysqli('localhost', 'root', '', 'moodle');
    if ($user['task'] == "insert") {
        $sql = "INSERT INTO mdl_user (auth, confirmed, mnethostid, username, password, idnumber, firstname, lastname, email, timecreated)
            VALUES ('wp2moodle', 1, 1,'" . $user['result'][0]->user_login . "','" . $user['result'][0]->user_pass . "',".$user['result'][0]->ID .",'". $user['firstname'] . "','" . $user['lastname'] . "','" . $user['useremail'] . "'," . time() . ")";
    } else if($user['task'] == 'update'){
        //to do write update query;
        $sql = "UPDATE mdl_user SET username = '".$user['result'][0]->user_login."', password = '".$user['result'][0]->user_pass."', idnumber=".$user['result'][0]->ID.", firstname = '".$user['firstname']."', lastname='".$user['lastname']."', email='".$user['useremail']."', timemodified=".time()." WHERE idnumber=".$user['result'][0]->ID;
    }
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    return;
}
