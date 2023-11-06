<?php
                    $cookie_name = "last_5_pages_Mobilo";
                    $cookie_expiration = time() + (86400 * 30); // 30 days
                    
                    // Get the current page URL
                    $current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    // Get the existing cookie value (if any)
                    $cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "";
                    
                    // Split the cookie value into an array of page URLs
                    $page_urls = $cookie_value ? explode(",", $cookie_value) : array();
                    
                    // Add the current page URL to the beginning of the array
                    array_unshift($page_urls, $current_page_url);
                    // Trim the array to only include the last 5 pages
                    $page_urls = array_slice($page_urls, 0, 5);
                    
                    // Join the array back into a comma-separated string
                    $cookie_value = implode(",", $page_urls);
                    
                    // Set the new cookie value
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
                    $cookie_name = "last_5_pages_all";
                    $cookie_expiration = time() + (86400 * 30); // 30 days
                    // Get the current page URL
                    $current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    
                    // Get the existing cookie value (if any)
                    $cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "";
                    
                    // Split the cookie value into an array of page URLs
                    $page_urls = $cookie_value ? explode(",", $cookie_value) : array();
                    
                    // Add the current page URL to the beginning of the array
                    array_unshift($page_urls, $current_page_url);
                    // Trim the array to only include the last 5 pages
                    $page_urls = array_slice($page_urls, 0, 10);
                    
                    // Join the array back into a comma-separated string
                    $cookie_value = implode(",", $page_urls);
                    
                    // Set the new cookie value
                    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
                    ?>

<?php require "dbconnect.php"; ?><?php
$productId = basename($_SERVER['PHP_SELF'], '.php');

//Fetch Reviews
$sql = "SELECT * FROM reviews WHERE productId = '$productId'";
$reviews = $conn->query($sql);
?>
<?php require "dbconnect.php"; ?><?php
$productId = basename($_SERVER['PHP_SELF'], '.php');

//Fetch Reviews
$sql = "SELECT * FROM reviews WHERE productId = '$productId'";
$reviews = $conn->query($sql);
?>
<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Mobilo</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="products.css">


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
                    <li><a href="../index.html">Home</a></li>
                        <li><a href="../about.html">About</a></li>
                        <li><a href="../products.html">Products/Services</a></li>
                        <li><a href="../news.html">News</a></li>
                        <li><a href="../contacts.php">Contact</a></li>
                        <!-- <li><a href="/users.html">Users</a></li> -->
                        <li><a href="../admin.html">Admin</a></li>
                        <li><a href="../curl.php">CURL</a></li>

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Iphone 11</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                    
                       <div class="card">
                            <img src="../images/images/1.png" alt="product" style="max-height:450px; max-width:450px;">
                            <h1>IPHONE 11 </h1>
                            <p class="price">$300</p>
                            <p>IPHONE 11 at its lowest price</p>
                            <p><button onclick="window.location.href='products/petkit.php';">Buy Now</button></p>
                          </div>

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


        
            </div>
        </div>
        
    </div>
</body>

</html>