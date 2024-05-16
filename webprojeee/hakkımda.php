<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
<header>
        <div class="directing">
            <div class="directingIcons">
                <a href="index.php" class="icons"> <img src="resources/bursaicon.png" alt="Şehrim"></a>
                <a href="mirasimiz.php" class="icons"> <img src="resources/gezilecekyerler.png" alt="Mirasımız"> </a>
                <a href="hakkimda.php" class="icons"> <img src="resources/aboutmeicon.png" alt="Hakkımda"></a>
                <a href="iletisim.php" class="icons"> <img src="resources/contact.png" alt="İletişim"> </a>
            </div>
            <div class="directingTexts">
                <h4>Şehrim</h4>
                <h4>Mirasımız</h4>
                <h4>Hakkımda</h4>
                <h4>İletişim</h4>
            </div>
        </div>
        <h1>HAKKIMDA</h1>
        <div class="log-in">
            <div class="indexLoggedinDiv">
                <h1 class="indexLoggedin" > 
                <?php 
                if($_SESSION["loginCheck"]==true){
                    echo "Giriş Yapıldı!";
                    echo "<br>";
                    echo $_SESSION["password"];
                }   
                else{
                    echo "Giriş Yapılmadı.";
                }
                ?>      
                </h1>
            </div>
            <div class="inedxLoginButtonDiv">
                <a href="login.php"><button class="inedxLoginButton" name="inedxLoginButton" >
                    <?php
                    if($_SESSION["loginCheck"]==true){
                        echo "Çıkış Yap";
                    }
                    else{
                        echo "Giriş Yap";
                    }
                    ?>
                </button></a>
            </div>
            
        </div>
    </header>
    <nav>
        <span></span>
    </nav>
    <div class="flexbox-container" >
        <div class="flexbox-1"></div>
        <div class="flexbox-2">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam nesciunt inventore veniam laudantium odit, corporis earum quia minus optio, ex saepe nobis reiciendis beatae aliquam unde deserunt, enim a vitae officia assumenda voluptatem ratione corrupti labore? Cumque sed deserunt quis rerum? Eos debitis accusamus magni corrupti, possimus praesentium perspiciatis ist voluptates cumque minus tenetur, quibusdam, iusto impedit reprehenderit aliquid debitis, rerum alias. Qui dicta libero reiciendis praesentium autem, voluptatem suscipit laboriosam cumque, ipsam tempora quasi voluptatum harum dolor maxime pariatur rem modi voluptas debitis eos quis quaerat! Accusamus molestias aspernatur provident eaque obcaecati soluta pariatur natus fuga totam animi quaerat ipsum fugit recusandae, atque doloribus voluptatibus odit repellat rem labore modi dolorum quae dicta! Odio cupiditate velit, illum nisi quae voluptate quisquam dolore autem aliquam incidunt eligendi necessitatibus accusamus aliquid vel!





        </div>
        <div class="flexbox-3"></div>
    </div>
    <footer>
        <br>
        <div class="footerDirecting">
            <h1>Sayfada Gezinin!</h1>
            <div class="footerDirectingIcons">
                <a href="index.php" class="footerIcons"> <img src="resources/bursaicon.png" alt="Şehrim"></a>
                <a href="mirasimiz.php" class="footerIcons"> <img src="resources/gezilecekyerler.png" alt="Mirasımız"> </a>
                <a href="hakkimda.php" class="footerIcons"> <img src="resources/aboutmeicon.png" alt="Hakkımda"></a>
                <a href="iletisim.php" class="footerIcons"> <img src="resources/contact.png" alt="İletişim"> </a>
            </div>
            <div class="footerDirectingTexts">
                <h4>Şehrim</h4>
                <h4>Mirasımız</h4>
                <h4>Hakkımda</h4>
                <h4>İletişim</h4>
            </div>
        </div>
        <br><br>
    </footer>



</body>
</html>