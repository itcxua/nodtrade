<?php
session_start();

// Параметры для авторизации
$login = 'admin';
$password = 'Egorov1+2+3'; // Используйте более сложный пароль в реальных проектах

// Обработка формы авторизации
if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] === $login && $_POST['password'] === $password) {
        $_SESSION['auth'] = true;
    } else {
        $error = "Неправильный логин или пароль";
    }
}

// Обработка выхода
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Обработка изменения данных
if (isset($_POST['update']) && isset($_SESSION['auth'])) {
    $data = json_decode(file_get_contents('prices.json'), true);
    foreach ($data as $key => $value) {
        if (isset($_POST[$key])) {
            $data[$key] = (int)$_POST[$key];
        }
    }
    file_put_contents('prices.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    $success = "Данные успешно обновлены!";
}

// Чтение данных из JSON-файла
$data = json_decode(file_get_contents('prices.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="icon" href="/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === true): ?>
            <h1>Админ панель</h1>
            <a href="?logout" class="btn btn-danger mb-3">Выйти</a>

            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?= $success ?></div>
            <?php endif; ?>

            <form method="post">
                <?php foreach ($data as $key => $value): ?>
                    <div class="form-group">
                        <label for="<?= $key ?>"><?= $key ?></label>
                        <input type="number" class="form-control" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>" required>
                    </div>
                <?php endforeach; ?>
                <button type="submit" name="update" class="btn btn-primary">Сохранить изменения</button>
            </form>

        <?php else: ?>
            <h1>Авторизация</h1>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>