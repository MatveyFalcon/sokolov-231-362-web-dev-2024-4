<?php include 'header.html'; ?>

<main>
  <section id="feedback-form">
    <div class="container">
      <h1>ФОРМА</h1>
      <form action="home.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">ФИО:</label>
          <input type="text" id="name" name="name" required value="<?php echo isset($_GET['name']) ? ($_GET['name']) : ''; ?>" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required value="<?php echo isset($_GET['email']) ? ($_GET['email']) : ''; ?>" />
        </div>

        <div class="form-group">
          <label>Откуда узнали о нас:</label>
          <div class="radio-group">
            <div>
              <input type="radio" id="internet" name="source" value="internet"
                <?php if (isset($_GET['source']) && $_GET['source'] == 'internet') echo 'checked'; ?> />
              <label class="radio-label" for="internet">Интернет</label>
            </div>
            <div>
              <input type="radio" id="friends" name="source" value="friends"
                <?php if (isset($_GET['source']) && $_GET['source'] == 'friends') echo 'checked'; ?> />
              <label class="radio-label" for="friends">Друзья</label>
            </div>
            <div>
              <input type="radio" id="advertisement" name="source" value="advertisement"
                <?php if (isset($_GET['source']) && $_GET['source'] == 'advertisement') echo 'checked'; ?> />
              <label class="radio-label" for="advertisement">Реклама</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="type">Тип обращения:</label>
          <select id="type" name="type" required>
            <option value="complaint">Жалоба</option>
            <option value="suggestion">Предложение</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Текст сообщения:</label>
          <textarea id="message" name="message" rows="5" required><?php echo isset($_GET['message']) ? ($_GET['message']) : ''; ?></textarea>
        </div>

        <div class="form-group">
          <label for="file">Вложения:</label>
          <input type="file" id="file" name="file" />
        </div>

        <div class="form-group">
          <div class="checkbox-container">
            <input type="checkbox" id="consent" name="consent" required <?php if (isset($_GET['consent'])) echo 'checked'; ?> />
            <label class="checkbox-label" for="consent">Даю согласие на обработку персональных данных</label>
          </div>
        </div>

        <button type="submit" class="submit-btn">Отправить</button>
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