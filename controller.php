<?php

$login = 'login';
$pass = '12345678';
$curr_login = $_POST["login"];
$curr_pass = $_POST["password"];

if ($login == $curr_login && $pass == $curr_pass) {
    $out = "Добро пожаловать!";
} else {
    $out = "Доступ запрещён!!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }
        div p{asdwd
            color: purple;
            font-weight: 900;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div>
        <p><?php echo $out; ?></p>
    </div>
</body>
</html>