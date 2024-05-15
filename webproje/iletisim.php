<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
        <h1>İLETİŞİM</h1>
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

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam nesciunt inventore veniam laudantium odit, corporis earum quia minus optio, ex saepe nobis reiciendis beatae aliquam unde deserunt, enim a vitae officia assumenda voluptatem ratione corrupe exercitationem quidem voluptate, voluptates dolorem cupiditate? Mollitia unde, voluptatem facilis velit cum quasi obcaecati magni architecto delectus. Nihil, sit voluptates cum sequi, quae minus cupiditate corrupti rem recusandae debitis sed fugit totam error consequuntur? Id iste quae, temporibus, atque esse magnam facere suscipit tempora aut exercitationem ipsa nobis repellendus, voluptate nemo blanditiis aliquid. Voluptate quod debitis dolorum perspiciatis. Omnis repudiandae necessitatibus sapiente tenetur commodi, eius voluptatum id veritatis. Iste laboriosam aperiam, architecto, tenetur numquam commodi repellendus quas deleniti est perspiciatis iusto rem ducimus expedita maxime ullam voluptatum velit dolorem recusandae. Sunt voluptas fuga nostrum officiis temporibus eum quo sed non fugiat minus cupiditate accusamus voluptatem doloribus illo suscipit, nobis et impedit hic? Sapiente dolorem expedita harum facere assumenda sequi, ipsum, laborum, commodi quod error similique recusandae quaerat! Voluptates nihil impedit quod sunt, eius atque, quis maiores perspiciatis harum sit omnis fuga nemo vel accusantium expedita velit sapiente, beatae odit earum! Sunt neque laborum iusto quasi delectus itaque rerum, quibusdam ab officiis quidem, minus id dicta eos, recusandae alias voluptate dolore! Odio non earum dolores quae explicabo, ipsam consequatur dolor fugiat quam unde, aut, exercitationem optio. Quod esse hic a omnis vero. Officia odit consequuntur dolor amet ex autem, a rerum iste! Re




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

</html>