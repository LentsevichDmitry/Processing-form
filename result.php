<?php
$headers = array(
    "Область отправителя",
    "Город отправителя",
    "Область получателя",
    "Город Получателя",
    "Индекс отправителя",
    "Индекс получателя",
    "Размер посылки(см)",
    "Вес посылки(кг)"
);
$inputData = array_combine($headers, $input);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href='index.php'>Назад</a>
<table border="2">
    <caption>Форма отправки посылки</caption>
    <?php
    if ($errors):
        foreach ($errors as $error):
            ?>
            <div class=“error"><?= $error ?></div>
        <?php
        endforeach;
    elseif ($input) :
        foreach ($inputData as $key => $item):
            ?>
            <tr>
                <td><?= $key ?></td>
                <th><?= $item ?></th>
            </tr>
        <?php
        endforeach;
    endif;
    ?>
</table>
</body>
</html>
