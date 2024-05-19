<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş</title>
    <link rel="stylesheet" href="mainstyle.css">
    <style>
        .flexbox-container{
            display: flex;
            justify-content: center;
        }
        .flexbox-1{
            min-width :10px;
        }
        .flexbox-2{
            min-width: 500px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            background-color: rgb(0, 0, 0);
            width: 900px;    
            color: whitesmoke;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .flexbox-3{
            min-width:10px ;
            
        }
        body{
            background-image: url(resources/tophane.jpg);
            background-blend-mode: multiply;
            background-position: cover;
            background-size: 100% 100%;
            background-repeat: no-repeat ;
            background-attachment: fixed;
            overflow-x: hidden;
        }
        header{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color:darkcyan;
            color:white;
            padding: 5px;
            text-align:center;
            border: 2px solid black;
            margin: 0px;
            border-radius: 0.5rem;
            top: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .directing{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: absolute;
            width: 300px ;
            min-width: 150px;
            height: 91.5px;
            border-radius: 0.5rem;
            background-color: rgb(0, 121, 121);
            text-align: center;
            top: 10px;
            left: 10px;
            
        }
        .directingIcons{
            width: 300px ;
            min-width: 150px;
            height: 57px;
            border-radius: 0.5rem;
            background-color: rgb(0, 121, 121);
            text-align: center;
            display: flex;
            justify-content: space-evenly;
        }
        .icons{
            min-width: 20px;
            min-height: 20px;
            display: flex;
            width: 50px;
            height: 50px;
            margin: 10px;
            transition: 0.3s;
        }
        .icons:hover{
            width: 60px;
            height: 60px;
        }
        .directingTexts{
            color: black;
            display: flex;
            justify-content:space-evenly;
            font-size: small;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        body{
            background-color:whitesmoke;
            font-family: work sans;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .inedxLoginButton:hover{
            background-color: rgb(0, 135, 135);
            height: 47px;
            width: 173px;
        }
        .container{
            padding: 2px;

        }
        .slider-wrapper{
            position: relative;
            max-width: 40rem;
            margin: 0 auto;   
        }
        .slider{
            display: flex;
            aspect-ratio: 4/3;
            overflow-x: hidden;
            scroll-snap-type: y mandatory;
            scroll-behavior: smooth;
            box-shadow:0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25) ;
            border-radius: 0.5rem;
        }
        .slider img{
            flex: 1 0 100%;
            scroll-snap-align: start;
            object-fit: cover;
        }
        .slider-nav{
            display: flex;
            column-gap: 1rem;
            position: absolute;
            bottom :1.25rem;
            left:50%;
            transform: translateX(-50%);
            z-index:1;

        }
        .slider-nav a{
            width: 1rem;
            height: 1rem;
            border-radius: 30%;
            background-color: #ffffff;
            opacity:0.75;
            transition: opacity ease 250ms;
        }
        .slider-nav a:hover{
            opacity: 1;
        }
        footer{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color: rgb(148, 146, 146);
            height: 250px;
            text-align: center;
            border-radius: 0.5rem;
            padding: 2px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            justify-content:space-around
        }
        .footerDirecting{
            width: 350px ;
            min-width: 150px;
            height: 250;
            border-radius: 0.5rem;
            text-align: center;
        }
        .footerDirectingIcons{
            width: 350px ;
            min-width: 150px;
            height: 70px;
            border-radius: 0.5rem;
            display: flex;
            text-align: center;
            justify-content: space-evenly;
        }
        .footerIcons{
            min-width: 20px;
            min-height: 20px;
            display: flex;
            width: 70px;
            height: 70px;
            margin: 10px;
            transition: 0.3s;
        }
        .footerIcons:hover{
            width: 75px;
            height: 75px;
        }
        .footerDirectingTexts{
            color: black;
            display: flex;
            justify-content:space-evenly;
            font-size: small;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .log-in{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: absolute;
            width: 170px ;
            height: 91.5px;
            border-radius: 0.5rem;
            background-color: rgb(0, 121, 121);
            text-align: center;
            top: 10px;
            right: 10px;
        }
        .indexLoggedinDiv{
            background-color: darkcyan;
            margin: 0px;
            position: absolute;
            top: 2px;
            height: 45.75px;
            width: 170px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-top-left-radius: .5rem;
            border-top-right-radius:.5rem ;
            text-align: center;
        }
        .indexLoggedinDiv h1{
            font-size: small;
            text-align: center;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .inedxLoginButtonDiv{
            
            position: absolute;
            top: 47.75px;
            height: 45.75px;
            width: 170px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-bottom-left-radius: .5rem;
            border-bottom-right-radius:.5rem ;
        }
        .inedxLoginButton{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            background-color: rgb(0, 106, 106);
            padding: 0px;
            margin: 0px;
            position: relative;
            height: 45.75px;
            width: 170px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-bottom-left-radius: .5rem;
            border-bottom-right-radius:.5rem ;
            cursor: pointer;
            transition: .5s;
        }

        .baslikCv{
            background-color: whitesmoke;
            border: 0px;
            box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);
            color: black;

        }
        .flexbox-2{
            width: 100rem;
            height: 150rem;
            background-color: whitesmoke;
            color: black;
        }
    </style>
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
        <h1>ÖZGEÇMİŞ</h1>
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
        <div class="flexbox-2">
            <header class="baslikCv">
                <h1>Oğuzhan Öztürk</h1>
                Bilgisayar Mühendisi
            </header>
            <section>
            </section>
            <article>
                <h1>Eğitim</h1>
                <p>Lisans</p>
                <p>Sakarya Üniversitesi Bilgisayar Mühendisliği Bölümü (2023- )</p>
                <h1>Dil Bilgisi</h1>
                <p>İngilizce (B2)</p>
                <h1>Bilinen Programlama Araçları/Dilleri</h1>
                <ul>
                    <li>C++ (Orta Seviye)</li>
                    <li>C# (Giriş Seviyesi) </li>
                    <li>HTML (Orta Seviye)</li>
                    <li>CSS (Giriş Seviyesi)</li>
                </ul>
                
            </article>
            <aside>
                <h1>İletişim</h1>
                Tel: +90 553 *** ** **
                <br>
                E-Mail: oguzhan.ozturk15@ogr.sakarya.edu.tr
                <br>
                Adres: Türkiye, Sakarya, Serdivan
            </aside>




        </div>
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