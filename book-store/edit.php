<?php include "./header.php";

$id = $_GET['id'];
$book = get_book($id);
?>



<form action="./update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $book->id ?>">
    <div class="mb-3">
        <label for="book_name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" value="<?= $book->book_name ?>">
    </div>
    <div class="mb-3">
        <label for="book_description" class="form-label">Book Description</label>
        <input type="text" class="form-control" id="book_description" name="book_description" value="<?= $book->book_description ?>">
    </div>
    <div class="mb-3">
        <label for="book_author" class="form-label">Book Author</label>
        <input type="text" class="form-control" id="book_author" name="book_author" value="<?= $book->book_author ?>">
    </div>
    <div class="mb-3">
        <label for="book_price" class="form-label">Book Price</label>
        <input type="text" class="form-control" id="book_price" name="book_price" value="<?= $book->book_price ?>">
    </div>
    <div>
        <label for="formFile" class="form-label">Upload Image</label>
        <input class="form-control" type="file" name="image" id="formFile">
    </div>

    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>