<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        table{
            padding: 0px;
            margin: 100px 400px;
            width: 700px;
            display: block;
            height: 100px;
            
        }
        table th {
            border: 1px solid black;
        }
        table td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="box box-primary">
        <div class="box-body">
            <table>
                <thead class="thead-dark">
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Người đăng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listposts = loadall_posts();
                    foreach ($listposts as $posts) {
                        extract($posts);

                    ?>
                    <tr>
                        <td><?= $title ?></td>
                        <td><?= $content ?></td>
                        <td><?= $date ?></td>
                        <td><?= $name ?></td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>
</html>