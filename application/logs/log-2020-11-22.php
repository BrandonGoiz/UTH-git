<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-22 06:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT *
FROM `rating`
WHERE `ratable_type` = 'course'
AND `ratable_id` IN()
ERROR - 2020-11-22 06:04:19 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/d6goo632vg6r/public_html/application/views/frontend/default/course_page.php 227
ERROR - 2020-11-22 11:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: SELECT DISTINCT `user_id`
FROM `enrol`
WHERE `course_id` IN()
ERROR - 2020-11-22 11:31:00 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/d6goo632vg6r/public_html/application/views/frontend/default/instructor_page.php 53
ERROR - 2020-11-22 14:55:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/d6goo632vg6r/public_html/application/views/frontend/default/course_page.php 68
ERROR - 2020-11-22 14:55:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/d6goo632vg6r/public_html/application/views/frontend/default/course_page.php 133
