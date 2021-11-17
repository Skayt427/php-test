<?php
error_reporting(-1);
$title = 'Обучение PHP';

header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="text.txt"');
readfile('text.txt');
die;
//header('HTTP/1.0 304 Not Modified');
//header('location: brig/index.php');
//header('refresh: 5; url=brig/index.php');
//die;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<?php
/*    $light = 'green';
    if ($light == 'green') {
        echo 'Едь';
    } elseif ($light == 'yellow') {
        echo 'Готовся';
    } else {
        echo 'Стой';
    }*/

// Таблица умножения
/*    $a = 2;
    while ($a < 10) {
        $b = 2;
        while ($b < 10) {
            echo "\t" . $a . ' * ' . $b . ' = ' . $a * $b++ . '<br>' . "\n";
        }
        $a++;
        echo '<br>'. "\n";
    }*/

// Селект
/*    $i = 1900;
    echo "<select>";
    while ($i <= 2021) {
        echo "\n\t" . '<option>' . $i++ . '</option>';
    }
    echo "\n</select>";*/

// Распечатка массива
function printArray($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

// Массив
$team = [
    [
        'name'   => 'Pudge',
        'role'   => 'Mid',
        'type'   => 'Strength',
        'item'   => 'Mask of madness',
        'status' => 'Feed',
    ],
    [
        'name'   => 'Crystal maiden',
        'role'   => 'Carry',
        'type'   => 'Intelligence',
        'item'   => 'Daedalus',
        'status' => 'Farm',
    ],
    [
        'name'   => 'Faceless void',
        'role'   => 'Support',
        'type'   => 'Agility',
        'item'   => 'Daedalus',
        'status' => 'Farm',
    ]
];

$team[] = [
    'name'   => 'Mirana',
    'role'   => 'Hard',
    'type'   => 'Agility',
    'item'   => 'Midas',
    'status' => 'Left',
];
//printArray($team);

/*$i = 0;
while ($i < count($team)) {
    echo "\n" . $team[$i]['name'] . "\n" . "\t" . "<br>" . $team[$i]['role'] . "\n" .  "\t" . "<br>" .  $team[$i]['type'] . "\n" . "\t" . "<br>" .  $team[$i]['item'] . "\n" . "\t" . "<br>" .  $team[$i]['status'] . "<br>" . "\n" . "<hr>";
    $i++;
}*/

// for
/*for ($i = 2; $i <= 9; $i++) {
    for ($k = 2; $k <= 9; $k++) {
        echo $i . ' * ' . $k . ' = ' . $i * $k . "<br>";
    }
    echo "<br>";
}*/

// foreach
/*foreach ($team as $chel) {
    foreach ($chel as $key => $value) {
        if ($value == 'Pudge' || $value == 'Faceless void') {
            break;
        }
        if ($key == 'name') {
            echo "$value <br>";
            continue;
        }
        echo "$key, Значеине: $value <br>";
    }
    echo "<br>";
}*/
?>
</body>
</html>
