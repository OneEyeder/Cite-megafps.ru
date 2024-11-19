<?php
add_action('wp_ajax_check_contact', 'check_contact_function');
add_action('wp_ajax_nopriv_check_contact', 'check_contact_function');
function check_contact_function() {
    // Подключение к базе данных
    $servername = "MySQL-8.2"; // Замените на адрес вашего сервера
    $username = "root"; // ваш пользователь phpMyAdmin
    $password = ""; // ваш пароль phpMyAdmin
    $dbname = "feedback2"; // имя вашей базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Получение данных из формы
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    // Защита от SQL-инъекций
    $name = $conn->real_escape_string($name);
    $phone = $conn->real_escape_string($phone);
    $message = $conn->real_escape_string($message);

    // SQL-запрос на вставку данных
    $sql = "INSERT INTO feedback (name, phone, message) VALUES ('$name', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    // Закрытие подключения
    $conn->close();

    wp_die(); // Завершение работы скрипта
}
?>
