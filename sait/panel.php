<?php
$session_cookies = 60 * 60;
session_set_cookie_params($session_cookies);
include 'connect.php';
session_start();
$id_user = $_SESSION['id_user'];
$status = $_SESSION['status'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demoexamen</title>
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include "header.php" ?>
<?php
// Проверяем, является ли пользователь администратором
if (isset($_SESSION['id_user']) && $_SESSION['status'] === 'admin') {
    if(isset($_POST['update_status'])) {
        $new_status = $_POST['new_status'];
        $id_order = $_POST['id_order'];

        // Обновляем статус заказа
        $sql = "UPDATE orders SET status_order = '$new_status' WHERE id_order = $id_order";
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Статус обновлен успешно"); window.location = "panel.php";</script>';
        } else {
            echo "Ошибка при обновлении статуса: " . $conn->error;
        }
    }

    // Создаем запрос к базе данных для получения всех заявок всех пользователей
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    // Выводим таблицу с заявками и форму для изменения статуса
    if ($result->num_rows > 0) {
        echo "<form class = 'admin-form' action='' method='post'>";
        echo "<table>";
        echo "<tr><th>id_order</th><th>id_user</th><th>product_name</th><th>booking_date</th><th>status_order</th><th>Действие</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_order"]."</td>";
            echo "<td>".$row["id_user"]."</td>";
            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["booking_date"]."</td>";
            echo "<td>".$row["status_order"]."</td>";
            if($row["status_order"] === 'новое') {
                echo "<td><select name='new_status'>";
                echo "<option value='подтверждено'>Подтвердить</option>";
                echo "<option value='отклонено'>Отклонить</option>";
                echo "</select>";
                echo "<input type='hidden' name='id_order' value='".$row["id_order"]."'>";
                echo "<input type='submit' name='update_status' value='Изменить'>";
                echo "</td>";
            } else {
                echo "<td>Недоступно</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</form>";
    } else {
        echo "<p>Нет заявок</p>";
    }
}
?>


<?php if (isset($_SESSION['id_user']) && $_SESSION['status'] === 'user'): ?>
    <div class="name">
        <h2><a href="order.php">Заказы</a></h2>
        <h2><a href="neworder.php">Оформить заказ</a></h2>
    </div>
<?php endif; ?>
            <footer class="footer">
    <div class="main-panel">
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
