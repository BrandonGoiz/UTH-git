<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-25 00:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 4 - Invalid query: SELECT *
FROM `rating`
WHERE `ratable_type` = 'course'
AND `ratable_id` IN()
ERROR - 2020-09-25 00:30:32 --> Severity: error --> Exception: Call to a member function num_rows() on bool /home/d6goo632vg6r/public_html/application/views/frontend/default/course_page.php 227
