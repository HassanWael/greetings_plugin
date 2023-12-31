<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * @package     local_greetings
 * @copyright   2023 Hassan digitalAnalytica
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once('../../config.php');
require_once($CFG->dirroot.'/local/greetings/lib.php');
$PAGE->set_context(context_system::instance());

$PAGE->set_pagelayout('classic');

$PAGE->set_title($SITE->fullname);
$PAGE->set_heading(get_string('pluginname', 'local_greetings', $username));
$PAGE->set_url(new moodle_url('/local/greetings/index.php'));

$displayname = isloggedin() ? fullname($USER) : "Guest";
echo $OUTPUT->header();
echo "<h1>Welcomme to AAU,  $displayname </h1>";
echo local_greetings_get_greeting($USER);
print_string('greetinguser', 'local_greetings', "Hassan Wael");
echo "Time is : ";
echo userdate(time());
echo $OUTPUT->footer();
