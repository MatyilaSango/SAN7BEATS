

<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="nav">
                <div class="left-nav">
                    <a href="#"><img class="logo" src="images/SAN7BeatsLC3D.png" height="50px" /></a>
                </div>
                <div class="right-nav">
                    <ul class="nav-list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="beats.php">Beats</a></li>
                        <li><a href="Links.php">Links</a></li>
                        <li><a href="About.php">About</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="content-head-index">
                <div class="welcome-text-box">
                    <div class="Head">SAN7BEATS</div>
                    <div class="text" id="text">
                        <p>Welcome, listen to some new free amazing beats.</P>
                    </div>
                </div>
                <div class="new-content-box">
                    <div class="intro-text">
                        <p>Below is the latest beat produced!</p>
                    </div>
                    <?php 
                        include 'conn.php'
                    ?>

                    <?php
                    $sql = "SELECT * FROM soundcloud_links ORDER BY ID DESC LIMIT 1";
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($res);
                    echo $data['code'];
                    ?>

                    <div class="intro-text">
                        <p>Go to the <a href="beats.php"><b>beats</b></a> side to access more beats.</p>
                    </div>
                </div>
            </div>

            <div class="copyright-name">
                <p>© 2022 SAN7Beats productions</p>
            </div>
        </div>

    </body>
    
</html>