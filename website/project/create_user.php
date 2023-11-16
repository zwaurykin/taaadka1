<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>mobilo</title>
    <link rel="stylesheet" href="index.css">


</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">mobilo</a></h1>
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
                <h1>Users
                </h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', '1');
                        require "dbconnect.php"; ?><?php
                                                    extract($_POST);

                                                    // Create connection
                                                    $conn = new mysqli($servername, $username, $password, $dbname, 3306);

                                                    // Check connection

                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    $sql = "INSERT INTO user VALUES ('$fname', '$lname','$email', '$haddress', '$hphone', '$cphone')";



                                                    if (mysqli_query($conn, $sql)) {
                                                        echo "New record created successfully";
                                                    } else {
                                                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    }

                                                    $conn->close();
                                                    ?>
                        <!--end log form -->
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


    </div>
    <footer id="footer">
        <div id="footer-inner">
            <p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
            <div class="clr"></div>
        </div>
    </footer>
    </div>
</body>

</html>