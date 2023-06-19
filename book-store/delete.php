<?php
require './functions.php';


$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=$id";
$result = mysqli_query(connect(), $sql);

header('Location: ./');
