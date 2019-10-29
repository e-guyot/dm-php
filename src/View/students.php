<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Students</title>
    </head>
    <body>
        <h1>Students list</h1>
        <ul>
            <?php foreach ($students as $student): ?>
                <li><?= $student['firstname'] ?> <?= strtoupper($student['lastname']) ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
