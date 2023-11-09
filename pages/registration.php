<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Регистрация</title>
    <link rel="stylesheet" href="../styles/css/style.min.css" />
</head>

<body>
    <?php
    require('db.php');
    // Когда форма подтверждена, данные вставляются в базу данных.
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);

        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Вы успешно зарегистрировались!</h3><br/>
                  <p class='link'>Нажмите чтобы <a href='login.php'>Войти</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Рекомендуемые поля пропущены!</h3><br/>
                  <p class='link'>Нажмите для<a href='registration.php'>регистрации</a> again.</p>
                  </div>";
        }
    } else {
        ?>
        <form class="form" action="" method="post">
            <h1 class="login-title">Регистрация</h1>
            <input type="text" class="login-input" name="username" placeholder="Имя пользователя" required />
            <input type="text" class="login-input" name="email" placeholder="Email">
            <input type="password" class="login-input" name="password" placeholder="Пароль">
            <input type="submit" name="submit" value="Зарегистрировать" class="login-button">
            <p class="link"><a href="login.php">Нажмите для входа.</a></p>
        </form>
        <?php
    }
    ?>
</body>

</html>