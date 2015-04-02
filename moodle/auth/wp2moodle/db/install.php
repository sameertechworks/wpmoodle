<?php

/**
 * Program auto enrolment lib API file
 *
 * @copyright Copyright 2015 eLearningExperts
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License 3.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
function xmldb_local_sop_install() {
    global $DB, $CFG;
    
    $DB->delete_records('role_capabilities', array ('capability' =>'moodle/user:editownprofile'));
    $DB->delete_records('role_capabilities', array ('capability' =>'moodle/user:changeownpassword'));
    
}
