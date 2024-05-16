<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
        <h1>İLETİŞİM</h1>
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

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam nesciunt inventore veniam laudantium odit, corporis earum quia minus optio, ex saepe nobis reiciendis beatae aliquam unde deserunt, enim a vitae officia assumenda voluptatem ratione corrupe exercitationem quidem voluptate, voluptates dolorem cupiditate? Mollitia unde, voluptatem facilis velit cum quasi obcaecati magni architecto delectus. Nihil, sit voluptates cum sequi, quae minus cupiditate corrupti rem recusandae debitis sed fugit totam error consequuntur? Id iste quae, temporibus, atque esse magnam facere suscipit tempora aut exercitationem ipsa nobis repellendus, voluptate nemo blanditiis aliquid. Voluptate quod debitis dolorum perspiciatis. Omnis repudiandae necessitatibus sapiente tenetur commodi, eius voluptatum id veritatis. Iste laboriosam aperiam, architecto, tenetur numquam commodi repellendus quas deleniti est perspiciatis iusto rem ducimus expedita maxime ullam voluptatum velit dolorem recusandae. Sunt voluptas fuga nostrum officiis temporibus eum quo sed non fugiat minus cupiditate accusamus voluptatem doloribus illo suscipit, nobis et impedit hic? Sapiente dolorem expedita harum facere assumenda sequi, ipsum, laborum, commodi quod error similique recusandae quaerat! Voluptates nihil impedit quod sunt, eius atque, quis maiores perspiciatis harum sit omnis fuga nemo vel accusantium expedita velit sapiente, beatae odit earum! Sunt neque laborum iusto quasi delectus itaque rerum, quibusdam ab officiis quidem, minus id dicta eos, recusandae alias voluptate dolore! Odio non earum dolores quae explicabo, ipsam consequatur dolor fugiat quam unde, aut, exercitationem optio. Quod esse hic a omnis vero. Officia odit consequuntur dolor amet ex autem, a rerum iste! Re




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


</html>