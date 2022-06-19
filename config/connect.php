<?php
$connect = mysqli_connect('localhost', 'root', '', 'course_project');
 if(!$connect) {
    die('Mistake in connection');
 }