<?php
require_once 'include/config.php';
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/article.css">
</head>

<body>
    <div class="root">
        <div class="main">
            <div class="container">
                <?php include 'include/header.php' ?>
                <section class="main__novelty novelty">
                    <div class="article__content">
                        <div class="article__top">
                            <h2 class="article__title">
                                Назва статті
                            </h2>
                            <h3 class="article__number-of-views">
                                100000 переглядів
                            </h3>
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
                        <h3 class="article__main-title">
                            Ukraine
                        </h3>
                        <h4 class="article__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quibusdam nulla. Quas modi odit, numquam tenetur ipsam aliquid, atque quo quisquam neque quaerat omnis vitae, id nobis laudantium? Sit distinctio, dolore aliquam possimus excepturi iure cupiditate sint omnis rerum ullam architecto, aliquid ad ipsam animi. Laudantium id molestias praesentium odit soluta velit perspiciatis, nobis in, ullam ipsa dolorum sint laboriosam error deleniti saepe quo. Nulla incidunt dolor reiciendis quidem quas nemo assumenda facere voluptate obcaecati ullam laboriosam voluptates est eos cumque error consequatur quaerat, recusandae neque, soluta, voluptatibus totam debitis. Aspernatur fugiat voluptatibus libero impedit temporibus, in ea aut dolorum.
                        </h4>
                        <h3 class="article__subtitle">
                            Resist and Bite
                        </h3>
                        <h4 class="article__text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt nam quidem repellendus est explicabo possimus! Iusto sunt reprehenderit autem mollitia expedita cum quod quas eius, illum repellendus nemo? Corrupti, explicabo nulla vero obcaecati voluptates eligendi fuga temporibus nihil sed. Sed, pariatur aspernatur. Quaerat unde, soluta voluptates laborum at commodi officiis, eum adipisci ea aliquid asperiores blanditiis ullam fugiat debitis perspiciatis quasi eius molestiae ipsum nihil vero quisquam. Officiis ducimus nulla blanditiis in perspiciatis. Facere sunt vel quam ducimus perferendis inventore.
                        </h4>
                        <h3 class="article__subtitle">
                            Kyiv
                        </h3>
                        <h4 class="article__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quas aspernatur perspiciatis unde libero quos perferendis atque voluptatum, veniam cum illum dicta quam nemo ea laudantium accusamus sapiente natus quaerat magnam tempora asperiores iste eligendi facere. Mollitia veritatis deserunt, sint odit minus fugit velit facere similique magnam temporibus cupiditate, error fuga molestias aliquid dignissimos ut iure? Est sit tempore animi aperiam fugit. Minus, vero odit enim at neque officia deserunt!
                        </h4>
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
                    <div class="article__content">
                        <div class="article__top">
                            <h2 class="article__comments-title">
                                Коментарі до статті
                            </h2>
                            <h3 class="article__add-comments">
                                Додати свій
                            </h3>
                        </div>
                        <div class="article__comments">
                            <div class="article__commentator commentator">
                                <img class="commentator__img" src="media/icons/jpg/comentator.jpg">
                                <div class="commentator__content">
                                    <p class="commentator__name">Іван Бобул</p>
                                    <p class="commentator__when">10днів тому</p>
                                    <p class="commentator__text">ммммммм, гарна стаття!</p>
                                </div>
                            </div>
                            <div class="article__commentator commentator">
                                <img class="commentator__img" src="media/icons/jpg/comentator.jpg">
                                <div class="commentator__content">
                                    <p class="commentator__name">Іван Бобул</p>
                                    <p class="commentator__when">10днів тому</p>
                                    <p class="commentator__text">ммммммм, гарна стаття!</p>
                                </div>
                            </div>
                            <div class="article__commentator commentator">
                                <img class="commentator__img" src="media/icons/jpg/comentator.jpg">
                                <div class="commentator__content">
                                    <p class="commentator__name">Іван Бобул</p>
                                    <p class="commentator__when">10днів тому</p>
                                    <p class="commentator__text">ммммммм, гарна стаття!</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <section class="article__content">
                    <h2 class="article__comment-title">
                        Додати коментар
                    </h2>
                    <form class="article__comment-form" action="">
                        <div class="article__comment-inputs">
                            <input class="article__comment-input" type="text" placeholder="Ім'я" name="name">
                            <input class="article__comment-input" type="text" placeholder="Нікнейм" name="nickname">
                        </div>
                        <textarea rows="20" cols="100" class="article__comment-textarea" type="text" placeholder="Коментар" name="comment"></textarea>
                        <input class="article__comment-button" type="submit" value="Відправити">
                    </form>
                </section>
                <?php include 'include/footer.php' ?>
            </div>
        </div>
    </div>
</body>

</html>