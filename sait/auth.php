<?php 
session_start();
if(isset($_SESSION['id_user'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demoexamen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    </head>
<body>
      <?php include 'header.php'; ?>
    <main class = "container_reg">
    <h2 class = "form_header">Авторизация</h2>
    <form action="auth_process.php" method="post">
        <input type="login" name="login" placeholder="Логин" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <input type="submit" class  = "submit_btn" value="Войти">
    </form>
    </main>
        <footer class="footer">
    <div class="main-auth">
        <div class="icons">
            <img class = "icons" src="images/vk.png" alt="">
            <img class = "icons"  src="images/youtube.png" alt="">
            <img class = "icons"  src="images/google.png" alt="">
            <img class = "icons"  src="images/inst.png" alt="">
        </div>
        <ul class = "ul_footer">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Компания</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
        <p>&copy;Эх,прокачу! | Все права защищены</p>
    </div>
  </footer>
</body>
</html>