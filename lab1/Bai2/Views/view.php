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