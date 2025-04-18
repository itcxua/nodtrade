<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tema = $_POST['tema'];
    $msg = $_POST['msg'];
    $botToken = '6509021353:AAHc96g2-Ja9OV2qMSbfp8_Ocz3zbkfJB0I'; // Замініть на ваш токен бота
    $chatId = '-1002220071242'; 
    $message = "👤ФИО: $name\n📞Телефон: $phone\n✉️Email: $email\n🥳Тема: $tema\n 📧Сообщение: $msg\n";
   
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $postFields = [
        'chat_id' => $chatId,
        'text' => $message
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
   
    curl_close($ch);


//$to = 'coder.viktor@gmail.com';
$to = 'admin@logisticstoukraine.com.ua';

// Указываем тему письма
$subject = "Новое сообщение $name";

// Формируем текст сообщения
$message = "
ФИО: $name\n
Телефон: $phone\n
Email: $email\n
Тема: $tema\n
Сообщение: $msg\n";

// Заголовки
$headers = "From: info@logisticstoukraine.com.ua\r\n" .
           "Reply-To: info@logisticstoukraine.com.ua\r\n" .
           "X-Mailer: PHP/" . phpversion() . "\r\n" .
           "MIME-Version: 1.0\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

// Отправляем письмо и проверяем результат
if (mail($to, $subject, $message, $headers)) {
    echo "Сообщение успешно отправлено.";
} else {
     http_response_code(500);
    echo "Не удалось отправить сообщение.";
}
}else{
        http_response_code(405);
    echo "Неверный метод запроса.";
}
?>