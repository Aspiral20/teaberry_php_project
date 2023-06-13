<?php
// Проверяем тип запроса, обрабатываем только POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Получаем параметры, посланные с javascript
    $order = $_POST['order'];
    $count = $_POST['count'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // создаем переменную с содержанием письма
    $content = $name . ' оставил заявку для бронирование чая ' . $order . ', ' . $count . 'грамм. Его телефон: ' . $phone;

    // Первый параметр - кому отправляем письмо, второй - тема письма, третий - содержание
    $success = mail("admin@teaberry.com", 'Запрос на сбор чая ', $content);
    //mail: admin@teaberry.com

    if ($success) {
        // Dam codul 200 la cererea http
        // Отдаем 200 код ответа на http запрос
        http_response_code(200);
        echo "Письмо отправлено";
    } else {
        // Trimitem eroar cu codul 500 (Eroare interna a serverului)
        // Отдаем ошибку с кодом 500 (internal server error).
        http_response_code(500);
        echo "Письмо не отправлено";
    }

} else {
    // Daca nu e cerere POST - trimitem 403 (actiune interzisa)
    // Если это не POST запрос - возвращаем код 403 (действие запрещено)
    http_response_code(403);
    echo "Данный метод запроса не поддерживается сервером";
}