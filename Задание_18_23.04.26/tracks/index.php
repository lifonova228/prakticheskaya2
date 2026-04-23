    <?php
include dirname(__DIR__) . "/data/tracks-data.php";
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="../assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="../assets/logo.png" alt="logo">
        <a href="../index.php"><h3>Музыкальный сервис</h3></a>
    </div>
    <nav>
        <a href="../teams/index.php">Группы</a> |
        <a href="../albums/index.php">Альбомы</a> |
        <a href="../tracks/index.php">Треки</a> |
        <a href="../admin/index.php">Консоль</a>
    </nav>
';

$footer = '
    <div class="block">
        <div class="logo">
            <img src="../assets/logo.png" alt="logo">
            <h2>Музыкальный сервис</h2>
        </div>
    </div>

    <div class="block">
        <div class="head">КОМПАНИЯ</div>
        <div class="links">
            <p><a href="../about/index.php">О нас</a></p>
            <p><a href="../contacts/index.php">Контакты</a></p>
        </div>
    </div>

    <div class="block">
        <div class="head">ПОЛЕЗНЫЕ ССЫЛКИ</div>
        <div class="links">
            <p><a href="https://www.spotify.com/ru-ru/" target="_blank">Spotify</a></p>
            <p><a href="https://support.spotify.com/ru-ru/" target="_blank">Справка</a></p>
        </div>
    </div>
';
    ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php echo $head; ?>
</head>
<body>
    <header>
        <div class="content ins">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main ins">
    <div class="content ins">
        <h1 style="text-align: center; margin-bottom: 30px;">Треки</h1>
        
        <table style="width: 100%; border-collapse: collapse; text-align: center;">
            <thead>
                <tr style="border-bottom: 1px solid #ccc; font-weight: bold;">
                    <td style="padding: 15px; width: 20%;">ID трека</td>
                    <td style="padding: 15px; width: 60%;">Название песни</td>
                    <td style="padding: 15px; width: 20%;">Примечание</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tracks as $track): ?>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 20px 0; font-size: 1.1em;">
                            <?php echo $track['id_track']; ?>
                        </td>
                        <td style="padding: 20px 0;">
                            <div style="font-weight: bold; font-size: 1.2em;">
                                <?php echo $track['name']; ?>
                            </div>
                            <a href="#" style="font-size: 0.8em; color: #888; text-decoration: underline;">подробнее...</a>
                        </td>
                        <td style="padding: 20px 0;">
                            <?php echo $track['note']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>