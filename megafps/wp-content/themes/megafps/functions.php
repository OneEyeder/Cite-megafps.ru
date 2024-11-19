<?php

// Обработка AJAX-запросов
add_action('wp_ajax_check_contact', 'check_contact_function');
add_action('wp_ajax_nopriv_check_contact', 'check_contact_function');

function check_contact_function() {
    // Получение данных из формы
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    // Здесь можете добавить код для сохранения данных в базу данных или отправки email

    // Пример: Если данные получены успешно
    if ($name && $phone && $message) {
        echo 'Сообщение успешно отправлено!'; // Пример ответа
    } else {
        echo 'Пожалуйста, заполните все поля.'; // Ответ в случае ошибки
    }

    wp_die(); // Завершение работы скрипта
}

// Подключение стилей и скриптов
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/Styles/main.css');
    wp_enqueue_style('icon', get_template_directory_uri() . '/assets/ico/favicon.ico');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/');
    wp_enqueue_style('preconnect', 'https://fonts.gstatic.com/');
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,900;1,400;1,900&display=swap');

    // Измененные пути к скриптам
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('script2', get_template_directory_uri() . '/js/script2.js', array('jquery'), '1.0', true);

    // Регистрируем и подключаем jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script('jquery');
});

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

?>
