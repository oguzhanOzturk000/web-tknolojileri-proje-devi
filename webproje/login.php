<?php
session_start();

    if(isset($_POST["loginBtn"])){
        $_SESSION["mail"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        $atIndex=strpos($_SESSION["mail"], "@");
        $_SESSION["loginCheck"]=false;
        if($_SESSION["password"]==substr($_SESSION["mail"] , 0 , $atIndex)){
            $_SESSION["loginCheck"]=true;
            
            sleep(2);
            header("Location: index.php");
            die();
        }
        else{
            $_SESSION["loginCheck"]=false;
            
        }
    } 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
        body{
            background-color: darkcyan;
        }
        .div-container{
            top: 20%;
            display: flex;
            justify-content: center;
            
        }       
        .flexboxItem{
            width: 200px;
        }
        .div1{
            min-width:0px;
            max-width: 300px;
        }
        .div2{
            position: absolute;
            top: 155px;
            width: 500px;
            height: 500px;
            border-radius: 2rem;
            background-color: rgb(0, 90, 90);
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            

        }
        .div3{
            min-width:0px;
            max-width: 300px;
        }
        .baslik{
            position: absolute;
            color: white;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            left: 152.651px;
            top: 5%;
            text-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .inputContainer{
            width: 300px;
            height: 300px;
            position: absolute;
            top: 28%;
            left: 20%;
            
        }
        .usernameText{
            font-size: large;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            position: absolute;
            left:1.666666%;
            width: 280px;
            height: 50px;
            border-radius: 0.5rem;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;
            text-align: center;
        }
        .passwordText{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: large;
            position: absolute;
            left:1.666666%;
            width: 280px;
            height: 50px;
            top: 40%;
            border-radius: 0.5rem;
            text-align: center;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;
        }
        .loginButton{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            position: absolute;
            border-radius: 1rem;
            box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;
            bottom: 0%;
            width: 150px;
            height: 40px;
            left: 25%;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class="div-container">
        <div class="div1 flexboxItem"></div>
        <div class="div2 flexboxItem">
            <h1 class="baslik">Giriş Yapın</h1>
            <form action="login.php" method="post">
                <div class="inputContainer">
                    <input type="email"  placeholder="Kullanıcı Adı" name="username" class="usernameText" required>
                    <br>
                    <br>
                    <input type="password" placeholder="Şifre" name="password" class="passwordText" required>
                    <br>
                    <br>
                    <input type="submit" value="Giriş Yap!" class="loginButton" name="loginBtn" required>
                </div>
            </form>
        </div>
        <div class="div3 flexboxItem"></div>
        
    </div>

    <?php
        if(isset($_POST["loginBtn"])){
            $_SESSION["mail"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];
            $atIndex=strpos($_SESSION["mail"], "@");
            $_SESSION["loginCheck"]=false;
            if($_SESSION["password"]==substr($_SESSION["mail"] , 0 , $atIndex)){
                $_SESSION["loginCheck"]=true;
                
                sleep(2);
                header("Location: index.php");
                die();
            }
            else{
                $_SESSION["loginCheck"]=false;
                
            }
            
    
    
        } 

    ?>
</body>
</html>