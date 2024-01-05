<?php 
/**
 * Hàm này trả về mảng tuần tự
 * @return array
 */

//model
function get_courses()
{
    global $course;
    return array_values($course);
}
get_courses();

/**
 * @param string $block
 * Hàm này kiểm tra coi có khóa học gì không
 */
function find_by_semester($block)
{
    global $course;
    return array_key_exists($block, $course) ? $course[$block] : "Invalid course";
}
?>