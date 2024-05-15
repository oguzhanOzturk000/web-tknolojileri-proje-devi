<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasımız</title>
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
        <h1>BURSA MİRASI</h1>
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

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam nesciunt inventore veniam laudantium odit, corporis earum quia minus optio, ex saepe nobis reiciendis beatae aliquam unde deserunt, enim a vitae officia assumenda voluptatem ratione corrupti labore? Cumque sed deserunt quis rerum? Eos debitis accusamus magni corrupti, possimus praesentium perspiciatis iste eligendi quos eaque quam est harum cum ullam consequatur odio assumenda, sapiente quod. Maiores ad repellendus praesentium modi debitis repellat asperiores ea nesciunt minus quaerat nostrum porro, alias error recusandae iste dolore, nulla vitae? Ratione rerum recusandae, sapiente consequuntur dolor animi vero libero ex minus hic assumenda ipsa exercitationem provident debitis magnam pariatur ducimus iure dolorum iusto. Veritatis sint labore aspernatur earum dicta laudantium officiis esse minima incidunt a temporibus nesciunt quasi corporis voluptatibus illo amet, praesentium deleniti eligendi culpa inventore eius. Quisquam expedita voluptatum officiis autem eos temporibus, quaerat odit ipsam. Et, dolorum. Illo id atque facilis amet aliquid quia dolores dolore neque, sed sapiente, suscipit corporis omnis. Velit et nulla quibusdam veniam alias! Recusandae vel consequatur reprehenderit nulla voluptatum, unde explicabo assumenda? Qui harum omnis vel id, deleniti voluptatem officia atque, quod voluptatibus porro eius. Molestias ex fugiat ullam at nihil veritatis perspiciatis voluptatum numquam, provident itaque aut nam eligendi saepe exercitationem quidem voluptate, voluptates dolorem cupiditate? Mollitia unde, voluptatem facilis velit cum quasi obcaecati magni architecto delectus. Nihil, sit voluptates cum sequi, quae minus cupiditate corrupti rem recusandae debitis sed fugit totam error consequuntur? Id iste quae, temporibus, atque esse magnam facere suscipit tempora aut exercitationem ipsa nobis repellendus, voluptate nemo blanditiis aliquid. Voluptate quod debitis dolorum perspiciatis. Omnis repudiandae necessitatibus sapiente tenetur commodi, eius voluptatum id veritatis. Iste laboriosam aperiam, architecto, tenetur numquam commodi repellendus quas deleniti est perspiciatis iusto rem ducimus expedita maxime ullam voluptatum velit dolorem recusandae. Sunt voluptas fuga nostrum officiis temporibus eum quo sed non fugiat minus cupiditate accusamus voluptatem doloribus illo suscipit, nobis et impedit hic? Sapiente dolorem expedita harum facere assumenda sequi, ipsum, laborum, commodi quod error similique recusandae quaerat! Voluptates nihil impedit quod sunt, eius atque, quis maiores perspiciatis harum sit omnis fuga nemo vel accusantium expedita velit sapiente, beatae odit earum! Sunt neque laborum iusto quasi delectus itaque rerum, quibusdam ab officiis quidem, minus id dicta eos, recusandae alias voluptate dolore! Odio non earum dolores quae explicabo, ipsam consequatur dolor fugiat quam unde, aut, exercitationem optio. Quod esse hic a omnis vero. Officia odit consequuntur dolor amet ex autem, a rerum iste! Reprehenderit commodi quo, reiciendis nihil et cum quidem dolore, sequi ad unde nesciunt nemo mollitia. Dicta quisquam aut quos adipisci voluptate nulla quae repellendus veritatis rem harum. Voluptatibus quidem dolorum consectetur quod temporibus doloremque ea porro magni qui consequatur facere, totam, tenetur laboriosam et eligendi non ducimus placeat? Odio laudantium ducimus deleniti, nam placeat voluptatem, nostrum blanditiis recusandae magni nemo, aperiam dolorem hic reiciendis sint explicabo. Beatae maxime suscipit quidem soluta tenetur cupiditate vero ipsam asperiores corrupti iste ab at dolorem delectus, consequuntur ullam id quibusdam iure sapiente eaque nemo omnis architecto. Ea natus totam omnis dolorum quaerat rem exercitationem expedita ducimus quis nihil aut nam quae minima officiis, similique, amet libero neque voluptatum! Tempora qui, error non quo ullam culpa in et quae, explicabo, iusto perferendis. Beatae quisquam exercitationem est esse mollitia. Autem ex dicta nam voluptatum dolorum sed labore, ab fuga, earum rerum maxime distinctio illo laboriosam saepe. Placeat, repellat cupiditate, eos illo dignissimos voluptatem tenetur assumenda alias aut quae suscipit accusamus sapiente sunt atque. Ipsam facere dolore eligendi ad explicabo iste enim ex magni ut unde tenetur dolorum voluptatum exercitationem quaerat repellendus ratione, eaque reiciendis porro consectetur tempore. Praesentium beatae voluptatibus enim odit, placeat excepturi nam, autem, aliquid id iste hic minus suscipit? Omnis reprehenderit molestiae possimus autem voluptate exercitationem eos alias quis dolor eligendi nihil cupiditate maxime nam at iusto quam, distinctio neque quod non quasi cumque incidunt placeat. Cumque optio dolorem laboriosam velit ullam commodi est aliquam quasi magni maiores quas, obcaecati, cupiditate nesciunt quo doloremque itaque! Cupiditate, est laboriosam quia error, perspiciatis delectus itaque ex voluptas aut, molestiae fuga porro facilis unde ratione vitae laborum mollitia veniam ullam nulla. Minus iure similique tempore quas voluptatibus est impedit itaque exercitationem excepturi sit, reprehenderit quidem velit vitae ipsum sequi unde harum eos totam facilis consequuntur placeat? Autem minima architecto laudantium commodi repellat nobis natus, accusantium nostrum temporibus aliquid, maxime delectus quibusdam. Totam iste adipisci aliquam quas, maiores eveniet nobis? Ea, nemo neque iste dolorum reprehenderit mollitia ad facere quia minima asperiores pariatur incidunt ex, ipsam, ratione laboriosam modi qui dolore velit tenetur officiis nam. Exercitationem ea expedita tempora beatae? Blanditiis quam consectetur cupiditate atque dicta pariatur sequi totam, molestiae quisquam expedita nemo perferendis dignissimos ut porro, quaerat repellat labore nobis, error reiciendis aliquam unde natus dolorum dolorem molestias. Deleniti magni sapiente voluptas veniam eos, explicabo molestiae iure odit quo autem placeat culpa tempora rem fugit at dicta sequi consequatur aspernatur, possimus ipsum esse quidem aperiam tenetur cupiditate. Inventore sint repudiandae neque dicta, necessitatibus omnis repellendus illum doloremque dolore obcaecati id amet voluptatum, explicabo ab tempora itaque nulla animi. Sapiente possimus, dolor officiis nemo iste eos amet harum dolores! Delectus ab totam deleniti laudantium, ipsa dignissimos? Excepturi voluptas inventore earum aliquam, in alias reiciendis assumenda temporibus, reprehenderit, odio minus tempora. Odit dolor ex sapiente accusantium commodi quo, delectus porro nostrum. Blanditiis vel tenetur provident consequuntur, reiciendis quaerat vitae facilis iste ipsum quos id debitis doloribus autem. Adipisci quam ea iure necessitatibus doloribus. Vitae error sequi animi doloribus veniam corporis saepe, repellat iste voluptatibus, earum, dolores nulla fugit! Eveniet quidem odio ducimus voluptates cumque minus tenetur, quibusdam, iusto impedit reprehenderit aliquid debitis, rerum alias. Qui dicta libero reiciendis praesentium autem, voluptatem suscipit laboriosam cumque, ipsam tempora quasi voluptatum harum dolor maxime pariatur rem modi voluptas debitis eos quis quaerat! Accusamus molestias aspernatur provident eaque obcaecati soluta pariatur natus fuga totam animi quaerat ipsum fugit recusandae, atque doloribus voluptatibus odit repellat rem labore modi dolorum quae dicta! Odio cupiditate velit, illum nisi quae voluptate quisquam dolore autem aliquam incidunt eligendi necessitatibus accusamus aliquid vel!





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