<?php include './header.php' ?>

<form action="./store.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="book_name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" required>
    </div>
    <div class="mb-3">
        <label for="book_description" class="form-label">Book Description</label>
        <input type="text" class="form-control" id="book_description" name="book_description" required>
    </div>
    <div class="mb-3">
        <label for="book_author" class="form-label">Book Author</label>
        <input type="text" class="form-control" id="book_author" name="book_author" required>
    </div>
    <div class="mb-3">
        <label for="book_price" class="form-label">Book Price</label>
        <input type="text" class="form-control" id="book_price" name="book_price" required>
    </div>
    <div>
        <label for="formFile" class="form-label">Upload Image</label>
        <input class="form-control" type="file" name="image" id="formFile">
    </div>

    <button type="submit" class="btn btn-primary" name="create">Create</button>
</form>

<?php include './footer.php' ?>