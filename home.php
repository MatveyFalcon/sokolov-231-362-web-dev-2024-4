<?php include 'header.html'; ?>

<main>
    <div class="container">
        <div class="contact">
            <?php
            // Проверка, отправлена ли форма
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Получение данных из формы
                $name = isset($_POST['name']) ? ($_POST['name']) : '';
                $email = isset($_POST['email']) ? ($_POST['email']) : '';
                $source = isset($_POST['source']) ? ($_POST['source']) : '';
                $type = isset($_POST['type']) ? ($_POST['type']) : '';
                $message = isset($_POST['message']) ? ($_POST['message']) : '';
                $file = isset($_FILES['file']) ? $_FILES['file']['name'] : '';

                // Проверка обязательных полей
                if ($name && $email && $message && $type) {
                    echo "<h3>Спасибо за ваше сообщение, $name!</h3>";

                    echo "<p>Ваш email: $email</p>";

                    if ($type == 'suggestion') {
                        echo "<p>Тип обращения: Предложение</p>";
                        echo "<p>Ваше предложение: $message</p>";
                    } else {
                        echo "<p>Тип обращения: Жалоба</p>";
                        echo "<p>Ваша жалоба: $message</p>";
                    }

                    if ($source) {
                        echo "<p>Вы узнали о нас через: $source</p>";
                    }

                    // Проверяем, был ли прикреплен файл
                    if ($file) {
                        echo "<p>Вы приложили файл: $file</p>";
                    }

                    // Кнопка для возврата к форме с сохранением данных
                    echo '<a href="forma.php?name=' . urlencode($name) . '&email=' . urlencode($email) . '&source=' . urlencode($source) . '" class="return-button">Заполнить снова</a>';
                } else {
                    // Если обязательные поля не заполнены, выводим ошибку
                    echo "<p>Ошибка: Необходимо заполнить все обязательные поля!</p>";
                }
            } else {
                echo "<p>Ошибка: форма не была отправлена.</p>";
            }
            ?>
        </div>
    </div>
</main>

</body>

</html>
