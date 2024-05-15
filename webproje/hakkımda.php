<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
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
            background-color: rgba(0, 0, 0, 0.774);
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
        body{
            background-color:whitesmoke;
            font-family: work sans;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        footer{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color: rgb(148, 146, 146);
            text-align: center;
            border-radius: 0.5rem;
            padding: 2px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
            margin: 0px;
            position: absolute;
            top: 2px;
            height: 45.75px;
            width: 170px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-top-left-radius: .5rem;
            border-top-right-radius:.5rem ;
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
        .inedxLoginButton:hover{
            background-color: rgb(0, 135, 135);
            height: 47px;
            width: 173px;
        }

    </style>
</head>
<body>
    <header>
        <h1>HAKKIMDA</h1>
        <div class="log-in">
            <div class="indexLoggedinDiv">
                <h1 class="indexLoggedin" name="indexLoggedin"></h1>
            </div>
            <div class="inedxLoginButtonDiv">
                <a href="../logIn/login.html"><button class="inedxLoginButton" name="inedxLoginButton" >Giriş Yap</button></a>
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
        <h1>Sayfada Gezinin!</h1>
        <a href="index.php">Şehrim</a>
        <br>
        <a href="mirasimiz.php">Mirasımız</a>
        <br>
        <a href="hakkımda.php">Hakkımda</a>
        <br>
        <a href="iletisim.php">İletişim</a>
        <br><br>
    </footer>


</body>
</html>