<?php include "header.php";
$search = $_GET['query'];
$search_results = search($search);
?>

<h1>Search Results</h1>
<?php if (count($search_results) > 0) : ?>
    <?php if (!empty($_GET['query'])) : ?>
        <?php foreach ($search_results as $result) : ?>
            <div>
                <h1><?= $result['book_name'] ?>|<span> Author: <?= $result['book_author'] ?></span></h1>
                <img src="<?= $result['book_image'] ?>" style=" width:20%;" alt="image">
                <div style="margin-top: 1rem;"><button><a style="color: blue;" href="subpage.php?id=<?= $result['id'] ?>">Details</a></button></div>
            </div>


        <?php endforeach; ?>

    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>
<?php else : ?>
    <p>No results found.</p>
<?php endif; ?>


<?php include "footer.php"; ?>