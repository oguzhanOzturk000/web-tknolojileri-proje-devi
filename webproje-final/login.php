<?php
session_start();
    $_SESSION["aktarBool"]=false;
    $_SESSION["hataliGiris"]=false;
    $_SESSION["loginCheck"]=false;
    $_SESSION["gostergeGiris"]="";
    if(isset($_POST["loginBtn"])){
        $_SESSION["mail"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        $atIndex=strpos($_SESSION["mail"], "@");
        $_SESSION["loginCheck"]=false;
        if(($_SESSION["password"]==substr($_SESSION["mail"] , 0 , $atIndex)) && (substr($_SESSION["mail"], $atIndex , length:$mail) == "@sakarya.edu.tr")){
            $_SESSION["loginCheck"]=true;
            $_SESSION["gostergeGiris"]="Giriş Başarılı!";
            $_SESSION["aktarBool"]=true;
        }
        else{
            $_SESSION["loginCheck"]=false;
            $_SESSION["gostergeGiris"]="Giriş Başarısız!";
        }

    }
    if($_SESSION["aktarBool"]==true){
        sleep(0.2);
        header("Location: index.php");
        die();
    }
    if(isset($_POST["continue"])){
        $_SESSION["loginCheck"]=false;
        sleep(0.2);
        header("Location: index.php");
        die();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="flexbox-container">
        <div class="flexbox-1"></div>
        <div class="flexbox-2">
            <h1 class="baslik">Giriş Yapın</h1>
            <form action="login.php" method="post">
                <div class="inputContainer">
                    <div class="usernameDiv">
                        <input type="email"  placeholder="Kullanıcı Adı" name="username" class="usernameText" required>
                    </div>
                    <br>
                    <br>
                    <div class="passwordDiv">
                        <input type="password" placeholder="Şifre" name="password" class="passwordText" required>
                    </div>
                    <br>
                    <br>
                    <div class="submitButtonsDiv">
                        <input type="submit" value="Giriş Yap" class="loginButton" name="loginBtn" >
                        <br>
                        <button class="cntnBtn"><a href="index.php">Giriş Yapmadan Devam Et</a></button>
                        <br>   
                    </div>
                    <div class="gostergeGiris">
                        <p>
                        <?php
                            echo $_SESSION["gostergeGiris"];
                        ?>
                        </p>
                    </div>
                </div>
            </form>

        </div>
        <div class="flexbox-3"></div>
    </div>
</body>
</html>