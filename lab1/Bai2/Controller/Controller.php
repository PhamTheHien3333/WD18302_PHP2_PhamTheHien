<?php
    $block = (!empty($_GET['block']) ? $_GET['block'] : '');
    $course_name = find_by_semester($block);
?>