<?php
include "./functions.php";
if (isset($_POST['update'])) {
    $book_id = isset($_POST['id']) ? $_POST['id'] : null;
    $book_name = isset($_POST['book_name']) ? $_POST['book_name'] : null;
    $book_description = isset($_POST['book_description']) ? $_POST['book_description'] : null;
    $book_author = isset($_POST['book_author']) ? $_POST['book_author'] : null;
    $book_price = isset($_POST['book_price']) ? $_POST['book_price'] : null;
    $book_image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null;


    if (!empty($_FILES)) {
        $ext = explode('/', $_FILES['image']['type']);
        $ext = $ext[array_key_last($ext)];
        $name = $_POST['book_name'];
        $file_name = "book-$name.$ext";
        $photo = "./images/$file_name";
        move_uploaded_file($_FILES['image']['tmp_name'], "./images/$file_name");
        $book_image = $photo;
    }

    update_book($book_id, $book_name, $book_description, $book_author, $book_image, $book_price);
    header("Location: subpage.php?id=$book_id");
    exit;
}
