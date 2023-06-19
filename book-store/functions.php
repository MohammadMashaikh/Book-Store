<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "book_store";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}


function get_all_books()
{
    $books = array();
    $connection = connect();
    $sql = "SELECT * FROM books";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) {
            $books[] = $row;
        }
    }
    mysqli_close($connection);
    return $books;
}

function get_last_three_books()
{
    $book_names = array();
    $connection = connect();
    $sql = "SELECT book_name FROM books ORDER BY id ASC LIMIT 3";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $book_names[] = $row['book_name'];
        }
    }
    mysqli_close($connection);
    return $book_names;
}

function get_book($id)
{
    $connection = connect();
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    mysqli_close($connection);
    return mysqli_fetch_object($result);
}


function update_book($id, $book_name, $book_description, $book_author, $book_image, $book_price)
{
    $connection = connect();

    // Escape the input values to prevent SQL injection attacks
    $book_name = mysqli_real_escape_string($connection, $book_name);
    $book_description = mysqli_real_escape_string($connection, $book_description);
    $book_author = mysqli_real_escape_string($connection, $book_author);
    $book_price = mysqli_real_escape_string($connection, $book_price);

    $sql = "UPDATE books SET book_name='$book_name', book_description='$book_description', book_author='$book_author', book_image='$book_image', book_price='$book_price' WHERE id='$id'";

    mysqli_query($connection, $sql);

    mysqli_close($connection);
}

function create_book($book_name, $book_description, $book_author, $book_image, $book_price)
{
    $connection = connect();

    // Escape the input values to prevent SQL injection attacks
    $book_name = mysqli_real_escape_string($connection, $book_name);
    $book_description = mysqli_real_escape_string($connection, $book_description);
    $book_author = mysqli_real_escape_string($connection, $book_author);
    $book_price = mysqli_real_escape_string($connection, $book_price);


    $sql = "INSERT INTO books (book_name, book_description, book_author, book_image, book_price) VALUES ('$book_name', '$book_description', '$book_author', '$book_image', '$book_price')";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function search($query)
{
    $connection = connect();
    $query = mysqli_real_escape_string($connection, $query);
    $sql = "SELECT * FROM books WHERE book_name LIKE '%$query%' OR book_author LIKE '%$query%'";
    $result = mysqli_query($connection, $sql);
    $results = array();
    while ($row = $result->fetch_assoc()) {
        $results[] = $row;
    }
    return $results;
}
