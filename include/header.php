<section class="main__menu menu">
    <div class="menu__sides">
        <div class="menu__left">
            <div class="menu__item-main">
                <?php echo $config['title'] ?>
            </div>
        </div>
        <div class="menu__right">
            <ul class="menu__items">
                <li class="menu__item">
                    <a class="menu__item" href="/">Головна</a>
                </li>
                <li class="menu__item">
                    <a class="menu__item" href="/pages/about-us.php">Про нас</a>
                </li>
                <li class="menu__item">
                    <a target="_blank" class="menu__item" href="<?php echo $config['telegram_url'] ?>">Ми в
                        соцмережах</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php
$categories_q = mysqli_query($connection, ' SELECT * FROM `Articles_categories` ');
$categories = array();
while ($cat = mysqli_fetch_assoc($categories_q)) {
    $categories[] = $cat;
}
?>
<section class="main__topics topics">
    <div class="topics__block">
        <ul class="topics__elements">
            <?php
            foreach ($categories as $categ) {
            ?>
                <li><a class="topics__element" href="../pages/articles.php?category=<?php echo $categ['id']; ?>"><?php echo $categ['title'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</section>