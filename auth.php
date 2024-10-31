<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="styles/auth.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="main-menu">
          <p class="MSokoloff">MSokoloff</p>
          <a href="index.php" class="write">НА ГЛАВНУЮ</a>
        </nav>
      </div>
    </header>

    <main>
      <section id="feedback-form">
        <div class="container">
          <h1>ВХОД</h1>
          <form action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Логин</label>
              <input type="text" id="name" name="name" required />
            </div>

            <div class="form-group">
              <label for="password">Пароль</label>
              <input type="password" id="password" name="password" required />
            </div>

            <div class="form-group">
              <div class="checkbox-container">
                <input type="checkbox" id="consent" name="consent" required />
                <label class="checkbox-label" for="consent"
                  >Запомнить меня</label
                >
              </div>
            </div>

            <button type="submit">Отправить</button>
          </form>
        </div>
      </section>
    </main>
    <footer id="footer" class="footer">
      <div class="footer-container">
        <p><a href="tel:+79851856978">+7 (985) 185-69-78</a></p>
        <p><a href="mailto:sokolstylz@yandex.ru">sokolstylz@yandex.ru</a></p>
        <p>&copy; <small>Соколов М. О.</small></p>
      </div>
    </footer>
  </body>
</html>
