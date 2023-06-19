<?php include "./functions.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store Template, Free CSS Template, CSS Website Layout</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="./" class="current">Home</a></li>
                <li><a href="./create.php">Create Book</a></li>
            </ul>
            <form action="search.php" method="GET">
                <div class="input-group">
                    <input type="text" name="query" placeholder="Search Book" class="form-control ">
                    <button type="submit" class="btn btn-info">Search</button>
                </div>
            </form>
        </div> <!-- end of menu -->

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>25%</span> discounts for
                    purchase over $80
                </p>
            </div>


            <div id="templatemo_new_books">
                <ul>
                    <?php foreach (get_last_three_books() as $book_name) : ?>
                        <li><?= $book_name ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div> <!-- end of header -->

        <div id="templatemo_content">

            <div id="templatemo_content_left">
                <div class="templatemo_content_left_section">
                    <h1>Categories</h1>
                    <ul>
                        <li><a href="subpage.html">Donec accumsan urna</a></li>
                        <li><a href="subpage.html">Proin vulputate justo</a></li>
                        <li><a href="#">In sed risus ac feli</a></li>
                        <li><a href="#">Aliquam tristique dolor</a></li>
                        <li><a href="#">Maece nas metus</a></li>
                        <li><a href="#">Sed pellentesque placerat</a></li>
                        <li><a href="#">Suspen disse</a></li>
                        <li><a href="#">Maece nas metus</a></li>
                        <li><a href="#">In sed risus ac feli</a></li>
                    </ul>
                </div>
                <div class="templatemo_content_left_section">
                    <h1>Bestsellers</h1>
                    <ul>
                        <li><a href="#">Vestibulum ullamcorper</a></li>
                        <li><a href="#">Maece nas metus</a></li>
                        <li><a href="#">In sed risus ac feli</a></li>
                        <li><a href="#">Praesent mattis varius</a></li>
                        <li><a href="#">Maece nas metus</a></li>
                        <li><a href="#">In sed risus ac feli</a></li>
                        <li><a href="#">Flash Templates</a></li>
                        <li><a href="#">CSS Templates</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="http://www.photovaco.com" target="_parent">Free Photos</a></li>
                    </ul>
                </div>

            </div> <!-- end of content left -->