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
                <section class="main__novelty novelty">
                    <div class="article__content">
                        <div class="article__top">
                            <h2 class="article__title">
                                Right Holders
                            </h2>
                        </div>
                        <img class="article__image" src="/media/icons/jpg/1.jpg">
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
                    <div class="article__content">
                        <h3>Right Holders...</h3>
                    </div>
                    <div class="news__popular popular">
                        <h2 class="popular__title">
                            Найпопулярніші статті
                        </h2>
                        <div class="popular__items">
                            <div class="popular__item">
                                <div class="popular__images">
                                    <img class="popular__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="popular__content">
                                    <div class="popular__title">
                                        Назва
                                    </div>
                                    <div class="popular__subtitle">
                                        Категорія
                                    </div>
                                    <div class="popular__text">
                                        Текст
                                    </div>
                                </div>
                            </div>
                            <div class="popular__item">
                                <div class="popular__images">
                                    <img class="popular__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="popular__content">
                                    <div class="popular__title">
                                        Назва
                                    </div>
                                    <div class="popular__subtitle">
                                        Категорія
                                    </div>
                                    <div class="popular__text">
                                        Текст
                                    </div>
                                </div>
                            </div>
                            <div class="popular__item">
                                <div class="popular__images">
                                    <img class="popular__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="popular__content">
                                    <div class="popular__title">
                                        Назва
                                    </div>
                                    <div class="popular__subtitle">
                                        Категорія
                                    </div>
                                    <div class="popular__text">
                                        Текст
                                    </div>
                                </div>
                            </div>
                            <div class="popular__item">
                                <div class="popular__images">
                                    <img class="popular__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="popular__content">
                                    <div class="popular__title">
                                        Назва
                                    </div>
                                    <div class="popular__subtitle">
                                        Категорія
                                    </div>
                                    <div class="popular__text">
                                        Текст
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main__comments comments">
                    <div class="comments__new-comments new-comments">
                        <h2 class="new-comments__main-title">
                            Найновіші коментарі:
                        </h2>
                        <div class="new-comments__items">
                            <div class="new-comments__item">
                                <div class="new-comments__images">
                                    <img class="new-comments__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="new-comments__content">
                                    <div class="new-comments__title">
                                        Коментатор
                                    </div>
                                    <div class="new-comments__subtitle">
                                        Категорія
                                    </div>
                                    <div class="new-comments__text">
                                        Коментар
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments__item">
                                <div class="new-comments__images">
                                    <img class="new-comments__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="new-comments__content">
                                    <div class="new-comments__title">
                                        Коментатор
                                    </div>
                                    <div class="new-comments__subtitle">
                                        Категорія
                                    </div>
                                    <div class="new-comments__text">
                                        Коментар
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments__item">
                                <div class="new-comments__images">
                                    <img class="new-comments__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="new-comments__content">
                                    <div class="new-comments__title">
                                        Коментатор
                                    </div>
                                    <div class="new-comments__subtitle">
                                        Категорія
                                    </div>
                                    <div class="new-comments__text">
                                        Коментар
                                    </div>
                                </div>
                            </div>
                            <div class="new-comments__item">
                                <div class="new-comments__images">
                                    <img class="new-comments__image" src="../media/icons/jpg/1.jpg">
                                </div>
                                <div class="new-comments__content">
                                    <div class="new-comments__title">
                                        Коментатор
                                    </div>
                                    <div class="new-comments__subtitle">
                                        Категорія
                                    </div>
                                    <div class="new-comments__text">
                                        Коментар
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
                <?php include '../include/footer.php' ?>
            </div>
        </div>
    </div>
</body>

</html>