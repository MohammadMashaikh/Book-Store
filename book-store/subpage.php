<?php include "./header.php"; ?>
<?php
$id = $_GET['id'];
$book = get_book($id);
?>


<div id="templatemo_content_right">

    <h1><?= $book->book_name ?>|<span> Author: <?= $book->book_author ?></span></h1>
    <img src="<?= $book->book_image ?>" style="height:70%; width:20%;" alt="image">
    <h2>Read the lessons - Watch the videos - Do the exercises</h2>
    <ul>
        <li>By <a href="#"><?= $book->book_author ?></a></li>
        <li>Price: <a href="#">$<?= $book->book_price ?></a></li>
        <li>Created At: <?= $book->created_at ?></li>
        <li>Updated At: <?= $book->updated_at ?></li>
    </ul>

    <p><?= $book->book_description ?></p>

    <a href="index.php" class="btn btn-primary">Back</a>
    <span>|</span>
    <a href="./edit.php?id=<?= $book->id ?>" class="btn btn-outline-warning">Edit</a>
    <span>|</span>
    <a href="./delete.php?id=<?= $book->id ?>" class="btn btn-outline-danger">Delete</a>

    <div class="cleaner_with_height">&nbsp;</div>

    <a href="index.html"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>

</div> <!-- end of content right -->

<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->

<?php include "./footer.php"; ?>