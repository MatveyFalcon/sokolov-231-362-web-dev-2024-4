<!DOCTYPE html>
<html lang="ru">

<head>

  <!--Переменная title для заголовка-->
  <?php
  // Устанавливаем заголовок страницы
  $title = "Веб-дизайнер Соколов М. О.";
  ?>

  <meta charset="utf-8" />
  <title><?php echo $title; ?></title> <!-- Выводим заголовок страницы из переменной $title -->
  <link rel="stylesheet" href="styles/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&display=swap"
    rel="stylesheet" />
</head>

<body>

  <?php
  // Массив для меню навигации с href и текстом ссылки
  $menu = [
    ['href' => '#about', 'text' => 'Обо мне'],
    ['href' => '#skills', 'text' => 'Навыки'],
    ['href' => '#footer', 'text' => 'Контакты'],
  ];
  ?>


  <header class="header">
    <div class="container">
      <nav class="main-menu">
        <p class="MSokoloff">MSokoloff</p>

        <div class="menu-style">
        <!-- Цикл foreach для вывода ссылок из массива $menu -->
        <?php foreach ($menu as $item): ?>
          <!-- Вывод каждой ссылки с атрибутом href и текстом -->
          <a style="margin-right: 50px" href="<?php echo $item['href']; ?>">
            <?php echo $item['text']; ?>
          </a>
        <?php endforeach; ?>
        </div>

        <img src="images/mail.svg" alt="Mail Icon" class="icon" />
        <a href="forma.php" class="write">СВЯЗАТЬСЯ</a>
        <a href="auth.php" class="write3">ВОЙТИ</a>
      </nav>
    </div>
  </header>
  <main>
    <div class="container">
      <figure class="me">
        <img src="images/person.png" alt="person" />
        <div class="button-container">
          <a href="https://disk.yandex.ru/d/c7x_IJm3gAitIw" target="_blank" class="write1">Мои работы</a>
          <a href="https://www.behance.net/matveysokolov" target="_blank" class="write2">Behance</a>
        </div>
      </figure>
    </div>

    <?php
    // Две переменные для заголовков разделов "Обо мне" и "Навыки"
    $heading1 = "ОБО МНЕ";
    $heading2 = "НАВЫКИ";
    ?>

    <div class="container">
      <section id="about">
        <!-- Вывод заголовка "ОБО МНЕ" -->
        <h1 class="title"><?php echo $heading1; ?></h1>
        <div class="about-container">
          <figure class="avatar">
            <!-- Вывод выбранного изображения -->
            <?php
            $s = date('s');
            $os = $s % 2;

            if ($os === 0) {
              $name = 'images/about-1.png';
            } else {
              $name = 'images/about.png';
            }

            echo '<img src="' . $name . '" alt="Меняющаяся фотография">';
            ?>
          </figure>
          <div class="about-text">
            <p class="about-heading">Graphic Designer</p>
            <p>
              Меня зовут Матвей, я занимаюсь графическим дизайном и делаю
              дизайн для сайтов и инфографику для маркетплейсов. Я закончил
              полугодовые курсы по дизайну от Умскул Академии и создал behance
              с первыми работами. Мне 18 лет, я студент второго курса и
              обучаюсь графическому дизайну в Московском политехническом
              университете.
            </p>
          </div>
        </div>
      </section>

      <section id="skills">
        <!-- Вывод заголовка "НАВЫКИ" -->
        <h2 class="title"><?php echo $heading2; ?></h2>
        <p class="center">
          Мои результаты ЕГЭ. <br />
          Я сдавал следующие экзамены и получил хорошие баллы:
        </p>
        <div class="skills-table">
          <table class="exam-results">
            <tr>
              <th>Предмет</th>
              <th>Баллы</th>
            </tr>
            <tr>
              <td>Информатика</td>
              <td>88</td>
            </tr>
            <tr>
              <td>Русский язык</td>
              <td>81</td>
            </tr>
            <tr>
              <td>Математика</td>
              <td>68</td>
            </tr>
          </table>
        </div>

        <?php
        // Массив с навыками
        $skills = ['Figma', 'Adobe Photoshop', 'Adobe Illustrator'];
        ?>

        <div class="tech-container">
          <!-- Цикл foreach для вывода списка навыков -->
          <ul class="tech-list">
            <?php foreach ($skills as $skill): ?>
              <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="tech-text">
            <p>
              Я активно использую эти инструменты в своей работе для создания
              графики и дизайна. Они позволяют мне создавать красивые макеты,
              а также иллюстрации и логотипы.
            </p>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer id="footer" class="footer">
    <div class="footer-container">
      <!-- Вывод контактной информации -->
      <p><a href="tel:+79851856978">+7 (985) 185-69-78</a></p>
      <p><a href="mailto:sokolstylz@yandex.ru">sokolstylz@yandex.ru</a></p>
      <p>&copy; <small>Соколов М. О.</small></p>
      <?php
      // Устанавливаем часовой пояс на Москву
      date_default_timezone_set('Europe/Moscow');
      ?>
      <!-- Вывод текущей даты и времени по Москве -->
      <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
    </div>
  </footer>
  <script>
  // Функция для изменения состояния шапки при скролле
  window.onscroll = function() {
    var header = document.querySelector('.header');

    // Проверяем, если прокрутка больше 50px
    if (window.pageYOffset > 50) {
      header.classList.add('scrolled'); // Добавляем класс для изменения стиля
    } else {
      header.classList.remove('scrolled'); // Убираем класс, если вернулись вверх
    }
  };
</script>
</body>

</html>