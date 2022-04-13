<?php 
    include 'conn.php'
?>

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
            
            <div class="content-head">
                <div class="welcome-text-box">
                    <div class="Head">SAN7BEATS</div>
                    <div class="text" id="text">
                        <p>List of beats produced.</p>
                    </div>
                </div>
                <div class="mid-content-box">
                    <?php
                    $sql = "SELECT * FROM soundcloud_links ORDER BY ID DESC";
                    $res = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_array($res)){
                        echo $data['code'];
                    }
                    ?>
                </div>
            </div>

            <div class="copyright-name">
                <p>© 2022 SAN7Beats productions</p>
            </div>

        </div>

    </body>
    
</html>