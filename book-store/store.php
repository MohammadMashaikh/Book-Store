<?php
include "./functions.php";

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");

if (isset($_POST['create'])) {
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

    create_book($book_name, $book_description, $book_author, $book_image, $book_price);
    header("Location: index.php");
    exit;
}
