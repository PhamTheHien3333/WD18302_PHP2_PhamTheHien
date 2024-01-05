<?php
$course = [
    'block1' => 'Lap trinh php2',
    'block2' => 'Lop WD18302',
    'block3' => 'Giang vien thay Phan Van Tinh'
];

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
//controller
$block = (!empty($_GET['block']) ? $_GET['block'] : '');
$course_name = find_by_semester($block);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1</title>
</head>

<body>
    <h3>PC07191-Lab1.1 <br>
        <?php echo $course_name ?>
    </h3>
    <form action="">
        <select name="block">
            <?php foreach ($course as $key => $value): ?>

                <option value="<?= $key ?>">
                    <?= $value ?>
                </option>
                <?php
            endforeach;
            ?>
        </select>
        <button type="submit">Tìm khóa học</button>
    </form>
</body>

</html>