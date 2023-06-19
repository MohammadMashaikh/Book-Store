<?php include "./header.php"; ?>
<div id="templatemo_content_right">
    <?php foreach (get_all_books() as $book) : ?>
        <div class="templatemo_product_box">
            <h1><?= $book->book_name ?>|<span> Author: <?= $book->book_author ?></span></h1>
            <img src="<?= $book->book_image ?>" style="height:70%; width:30%;" alt="image">
            <div class="product_info">
                <p><?= $book->book_description ?></p>
                <h3>$<?= $book->book_price ?></h3>
                <div class="detail_button"><a href="subpage.php?id=<?= $book->id ?>">Details</a></div>
            </div>
            <div class="cleaner">&nbsp;</div>
        </div>
    <?php endforeach; ?>

    <img src="images/templatemo_ads.jpg" style="margin-top: 4rem;" alt="ads" />
</div> <!-- end of content right -->

<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->

<?php include "./footer.php"; ?>