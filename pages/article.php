<?php
require_once '../include/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $config['title'] ?>
    </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/article.css">
</head>

<body>
    <div class="root">
        <div class="main">
            <div class="container">
                <?php include '../include/header.php' ?>
                <?php
                $article_q = mysqli_query($connection, 'SELECT * FROM `Articles` WHERE `id`=' . (int) $_GET['id']);
                $article = array();
                mysqli_query($connection, 'UPDATE `Articles` SET `views`=`views`+1 WHERE `id`=' . (int) $_GET['id']);
                while ($art = mysqli_fetch_assoc($article_q)) {
                    $article[] = $art;
                }
                ?>
                <section class="main__novelty novelty">
                    <?php
                    if (mysqli_num_rows($article_q) <= 0) {
                    ?>
                        <div class="article__content">
                            <div class="article__top">
                                <h2 class="article__title">
                                    Стаття не знайдена
                                </h2>
                            </div>
                            <img class="article__image" src="/static/article_images/<?= $article[0]['image'] ?>">
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="article__content">
                            <div class="article__top">
                                <h2 class="article__title">
                                    <?= $article[0]['title'] ?>
                                </h2>
                                <p class="article__views">
                                    Кількість переглядів: <?= $article[0]['views'] ?>
                                </p>
                            </div>
                            <img class="article__image" src="/static/article_images/<?= $article[0]['image'] ?>">
                        </div>
                    <?php
                    }
                    ?>
                    <div class="novelty__statistics">
                        <h2 class=statistics__title>
                            Деякі числа про нас
                        </h2>
                        <p class="statistics__element">
                            Загальна кількість відвідувачів:
                        </p>
                        <p class="statistics__element">
                            Кількість відвідувачів онлайн:
                        </p>
                        <p class="statistics__element">
                            Кількість статей:
                        </p>
                        <p class="statistics__element">
                            Загальна кількість перегляду статей:
                        </p>
                    </div>
                </section>
                <section class="main__news news">
                    <?php
                    if (mysqli_num_rows($article_q) <= 0) {
                    ?>
                        <div class="article__content">
                            <h3>
                                Стаття яку ви запросили поки не існує :(
                            </h3>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="article__content">
                            <h3>
                                <?= $article[0]['text'] ?>
                            </h3>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="news__popular popular">
                        <h2 class="popular__title">
                            Найпопулярніші статті
                        </h2>

                        <?php
                        $popular_articles = mysqli_query($connection, 'SELECT * FROM `Articles` ORDER BY `views` DESC LIMIT 6');
                        ?>
                        <div class="popular__items">
                            <?php
                            while ($pop_art = mysqli_fetch_assoc($popular_articles)) {
                                foreach ($categories as $cat) {
                                    if ($cat['id'] == $pop_art['category_id']) {
                                        break;
                                    }
                                }
                            ?>
                                <div class="popular__item">
                                    <div class="popular__images">
                                        <img class="popular__image" src="/static/article_images/<?= $pop_art['image'] ?>">
                                    </div>
                                    <div class="popular__content">
                                        <div class="popular__title">
                                            <a class="popular__title" style="cursor:pointer" href="article.php?id=<?php echo $pop_art['id'] ?>">
                                                <?= $pop_art['title'] ?>
                                            </a>
                                        </div>
                                        <div class="popular__subtitle">
                                            Категорія: <?= $cat['title'] ?>
                                        </div>
                                        <div class="popular__text">
                                            <?= mb_substr($pop_art['text'], 0, 100) . '...' ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
                <section class="main__comments comments">
                    <div class="comments__new-comments new-comments">
                        <div class="new-comments__flex">
                            <h2 class="new-comments__main-title">
                                Коментарі:
                            </h2>
                            <a class="new-comments__add-comment">
                                Додати свій
                            </a>
                        </div>

                        <?php
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                        $comments = mysqli_query($connection, 'SELECT * FROM `Comments` WHERE `article_id`=' . (int) $_GET['id'] . ' ORDER BY `id` DESC');
                        if (mysqli_num_rows($comments) <= 0) {
                            echo 'Коментарів поки немає!';
                        }
                        ?>

                        <div class="new-comments__items">
                            <?php
                            while ($comment = mysqli_fetch_assoc($comments)) {
                            ?>
                                <div class="new-comments__item">
                                    <div class="new-comments__images"><img class="new-comments__image" src="https://www.gravatar.com/avatar/<?= md5($comment['email']) ?>?s=1250">
                                    </div>
                                    <div class="new-comments__content">
                                        <div class="new-comments__title">
                                            <?= $comment['author'] . ' ' .  $comment['nickname'] ?>
                                        </div>
                                        <div class="new-comments__text">
                                            <?= $comment['text'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
                <?php include '../include/footer.php' ?>
            </div>
        </div>
    </div>
</body>

</html>