<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <link rel="stylesheet" href="index.css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div style="text-align: center;">
  <img src="images/images/logo.png" width="300" height="200" alt="Image" class="sideways-image">
</div>
    <title>Mobilo</title>


</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">Mobilo</a></h1>
                </div>
                <div id="top-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="products.html">Products/Services</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="users.html">Users</a></li>
                        <li><a href="admin.html">Admin</a></li>
                        <li><a href="curl.php">CURL</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Contact us</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <?php
                            $lines = file('contacts.txt');
                            $count = 0;
                            foreach($lines as $line) {
                                $count += 1;
                                echo str_pad($count, 2, 0, STR_PAD_LEFT).". ".$line;
                                echo "<br>";

                            }
                        ?>
                    </div>
                </main>

                <!-- <nav id="sidebar">
                    <div class="widget">
                        <h3>Left heading</h3>
                        <ul>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                        </ul>
                    </div>
                </nav> -->

                <div class="clr"></div>
            </div>
        </div>

       
</body>

</html>