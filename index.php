<?php
require_once 'include/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['title'] ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="root">
        <div class="main">
            <div class="container">
                <?php include 'include/header.php' ?>
                <section class="main__novelty novelty">
                    <div class="novelty__content">
                        <div class="novelty__top">
                            <h2 class="novelty__title">
                                Новинки на Geo_Wiki
                            </h2>
                            <a href="pages/articles.php" class="novelty__all-categories" style="cursor:pointer">
                                Усі записи
                            </a>
                        </div>
                        <?php $articles = mysqli_query($connection, 'SELECT * FROM `Articles` ORDER BY `id` DESC LIMIT 9'); ?>
                        <div class="novelty__grid">
                            <?php
                            while ($article = mysqli_fetch_assoc($articles)) {
                            ?>
                                <div class="novelty__element element-novelty">
                                    <div class="element-novelty__image">
                                        <img class="element-novelty__image" src="/static/article_images/<?php echo $article['image']; ?>">
                                    </div>
                                    <div class="element-novelty__content">
                                        <a class="element-novelty__title" style="cursor:pointer" href="pages/article.php?id=<?php echo $article['id'] ?>">
                                            <?= $article['title'] ?>
                                        </a>
                                        <?php
                                        $art_cat = false;
                                        foreach ($categories as $cat) {
                                            if ($cat['id'] == $article['category_id']) {
                                                $art_cat = $cat;
                                                break;
                                            }
                                        }
                                        ?>
                                        <a class="element-novelty__subtitle" style="cursor:pointer" href="pages/articles.php?category=<?php echo $art_cat['id']; ?>">
                                            Категорія: <?= $art_cat['title'] ?>
                                        </a>
                                        <p class="element-novelty__text">
                                            <?= mb_substr($article['text'], 0, 180, 'utf-8') . '...'; ?>
                                        </p>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
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
                    <div class="news__shell">
                        <div class="news__container">
                            <div class="news__content">
                                <div class="news__title">
                                    Тема
                                </div>
                                <div class="news__text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium qui autem
                                    totam voluptatibus cum, tempora quo, harum numquam enim minus placeat nihil
                                    provident dolore maxime excepturi. Cumque velit quaerat unde!
                                </div>
                            </div>
                            <div class="news__images">
                                <img class="news__image" src="../media/icons/jpg/1.jpg">
                            </div>
                        </div>
                        <div class="news__container">
                            <div class="news__content">
                                <div class="news__title">
                                    Тема
                                </div>
                                <div class="news__text">
                                    text
                                </div>
                            </div>
                            <div class="news__images">
                                <img class="news__image" src="../media/icons/jpg/1.jpg">
                            </div>
                        </div>
                    </div>
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
                                        <img class="popular__image" src="static/article_images/<?= $pop_art['image'] ?>">
                                    </div>
                                    <div class="popular__content">
                                        <div class="popular__title">
                                            <a class="popular__title" style="cursor:pointer" href="pages/article.php?id=<?php echo $pop_art['id'] ?>">
                                                <?= $pop_art['title'] ?>
                                            </a>
                                        </div>
                                        <div class=" popular__subtitle">
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
                    <div class="comments__add-comment add-comment">
                        <h2 class="add-comment__title">
                            Напишіть нам:
                        </h2>
                        <form class="add-comment__form" action="">
                            <input class="add-comment__input" type="email" placeholder="Ваша електронна пошта">
                            <textarea rows="10" cols="45" class="add-comment__input" type="text" placeholder="Коментар"></textarea>
                        </form>
                    </div>
                    <div class="comments__new-comments new-comments">
                        <h2 class="new-comments__main-title">
                            Найновіші коментарі:
                        </h2>
                        <?php
                        $comments = mysqli_query($connection, 'SELECT * FROM `Comments` ORDER BY `id` DESC LIMIT 4');
                        ?>
                        <div class="new-comments__items">
                            <?php
                            while ($comment = mysqli_fetch_assoc($comments)) {
                                $article_q = mysqli_query($connection, 'SELECT * FROM `Articles` WHERE `id`=' . $comment['article_id']);
                                $article = mysqli_fetch_assoc($article_q);
                            ?>
                                <div class="new-comments__item">
                                    <div class="new-comments__images"><img class="new-comments__image" src="https://www.gravatar.com/avatar/<?= md5($comment['email']) ?>?s=1250">
                                    </div>
                                    <div class="new-comments__content">
                                        <div class="new-comments__title">
                                            <?= $comment['author'] . ' ' .  $comment['nickname'] ?>
                                        </div>
                                        <div class="new-comments__subtitle">
                                            Стаття: <?= $article['title'] ?>
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
                <?php include 'include/footer.php' ?>
            </div>
        </div>
    </div>
</body>

</html>