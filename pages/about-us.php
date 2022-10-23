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
                                Про нас
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
                <?php include '../include/footer.php' ?>
            </div>
        </div>
    </div>
</body>

</html>