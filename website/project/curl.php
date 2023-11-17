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
                        <li><a href="curl.php">CURL</a></li>

                        <li><a href="admin.html">Admin</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>CURL</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <?php
                        $curl_handle = curl_init();
                        curl_setopt($curl_handle, CURLOPT_URL, "https://taaadka1-39dd5ade5863.herokuapp.com/website/project/company-users.php");
                        curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
                        $contents = curl_exec($curl_handle);
                        curl_close($curl_handle);


                        $users = preg_split('/<br[^>]*>/i', $contents);


                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>";
                            echo $user;
                            echo "</td>";
                            echo "</tr>";
                            echo "</br>";
                        }
                        ?>
                    </div>
                </main>


                <div class="clr"></div>
            </div>
        </div>





        <div class="clr"></div>
    </div>
    </div>

    </div>
</body>

</html>