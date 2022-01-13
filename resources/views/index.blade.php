<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание для Profilance Group</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header>
    <a href="/" class="logo">Simple links</a>
</header>
<main>
    <div class="wrapper">
        <section class="info">
            <p>Simple links - сервис для быстрого сокращения ссылок, никакой регистрации, никакой рекламмы.
                Введите вашу ссылку в поле ниже и получите красивую и короткую ссылку.</p>
        </section>
        <section class="link-shortening">
            <p>Быстрое сокращение ссылки:</p>
            <form id="link-shortening-form" onsubmit="return false">
                <select name="protocol" class="protocol">
                    <option value="https">HTTPS</option>
                    <option value="http">HTTP</option>
                </select> ://
                <input type="text" name="link" class="link" placeholder="Введите ссылку" id="link" required>
                <button class="btn submit"type="submit">Сократить</button>
            </form>
            <p>Пример: https://google.com</p>
            <p id="message"></p>
        </section>

        <section id="links-list">
            <div class="link">
                <p><a href="https://vk.com">https://vk.com</a> => <a href="https://localhost">https://localhost/ksils9</a></p>
            </div>
        </section>

        <footer>
            <p>Сокращение ссылок</p>
        </footer>
    </div>
</main>
</body>
</html>
