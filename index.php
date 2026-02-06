<?php
    $form = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Занятие 10</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }
        form {
            display: flex;
            flex-direction: column;
            border: green 1px solid;
            padding: 1rem;
        }
        input:not(:last-child){
            margin-bottom: 2rem;
        }
        .denied p{
            color: red;
            font-weight: 900;
        }
    </style>
</head>
<body>
    <?php if ($form): ?>
    <form action="" method="post">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password">
    </form>
    <?php else: ?>
    <div class="denied">
        <p>Вход вам не доступен</p>
    </div>
    <?php endif; ?>
</body>
</html>