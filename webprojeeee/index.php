<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim</title>
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
        <h1>BURSA</h1>
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
            <article class="article">
                <h2>Bursa'da Gezilecek Yerler</h2>

                <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image1" src="resources/ulucami.jpg" alt="ulucami">
                            <img id="image2" src="resources/irgandikoprusu.jpeg" alt="irgandi koprusu">
                            <img id="image3" src="resources/tophane4png.png" alt="tophane">
                            <img id="image4" src="resources/uludag.jpeg" alt="uludag">
                            <img id="image5" src="resources/teleferik.jpg" alt="teleferik">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image1"></a>
                            <a href="#image2"></a>
                            <a href="#image3"></a>
                            <a href="#image4"></a>
                            <a href="#image5"></a>
                        </div>
                    </div>
                </section>
                
                <h4 id="ulucami">Ulu Camii</h4>
                <p>
                Bursa’nın tarihi sembollerinden olan Ulu Camii'nin yirmi kubbeli yapısı, Türkiye’deki iç cemaat yeri en geniş camidir. Caminin kündekari tekniği ile yapılmış minberi Selçuklu oyma sanatından Osmanlı ahşap oymacılığı sanatına geçişin en önemli örneklerinden biri kabul edilen değerli bir sanat eseridir.
                </p>
                <h4>Irgandı Köprüsü</h4>
                <p>Irgandı Köprüsü, Bursa kentinde, zanaatçıların geleneksel el sanatlarını icra ettiği köprü. 1442 yılında Irgandılı Ali’nin oğlu Hacı Muslihiddin tarafından inşa edildi. Irgandı Köprüsü, 2004 yılında Osmangazi Belediyesi tarafından yenilendi ve kullanıma açıldı.</p>
                <h4>Tophane</h4>
                <p>Osmanlı dönemi mimarisini yansıtan önemli bir anıtsal eserdir. Tophane Parkı içinde, İmparatorluğun kurucusu Osman Gazi ile ikinci padişahı Orhan Gazi'nin türbelerinin arkasında, eski adı Meydanı-ı Osmaniye olan Tophane Meydanı'ndadır. Bulunduğu yerden panoramik Bursa manzarasının görünmesi dolayısıyla, bir yangın kulesi olarak da kullanılmıştır.</p>
                <h4>Uludağ</h4>
                <p>Uludağ, Bursa ili sınırları içinde, 2.543 m yüksekliği ile Türkiye'nin en büyük kış ve doğa sporları merkezi olan dağ. Uludağ; Marmara Bölgesinin en yüksek dağıdır. Kuzeybatı-güneydoğu doğrultusunda uzanan Uludağ'ın uzunluğu 40 km'yi bulur. Genişliği ise 15–24 km'dir. Toplu ve heybetli bir görünüşe sahip olan bu dağın Bursa'ya bakan yamaçları kademeli, güneye Orhaneli'ne bakan tarafları ise düz ve daha diktir.</p>
                <h4>Teleferik</h4>
                <p>Bursa Teleferik, Türkiye'nin ilk teleferik hattıdır. 29 Ekim 1963'te açılmıştır. Bursa'nın şehir simgelerinden biri olan Bursa Teleferik aynı zamanda halatlı taşımacılık alanında 9 km yatay uzunluğu ile Türkiye'nin en uzun teleferik hattıdır. İstasyonlarında bulunan eğlence merkezleri ve alışveriş dükkanları ile aynı zamanda bir yaşam merkezidir.</p>
                <h2>Bursanın Tarihi</h2>
                <p>
                    Bursa'da şimdilik bilinen en eski arkeolojik kalıntılar Yenişehir yakınlarındaki Menteşe Höyüğü ve Orhangazi yakınlarındaki Ilıpınar'dan bilinmektedir. Bu arkeolojik buluntu yerlerinin en eski tabakaları yaklaşık 7 bin yıllıktır. Bu tabakalardaki kültür, çanak çömleğin gelişmiş olarak ortaya çıktığı, mimarinin dörtgen planlı, bol miktarda ahşap destekli kerpiç kullanılarak inşa edilmiş yapılardan oluştuğu tabakalardır. Bursa'da David French, Mehmet Özdoğan ve Jacop Roodenberg'in arkeoloji ile ilgili çalışmaları tarih öncesiyle ilgili pek çok yeni bilgi ortaya koymuştur.
                    
                    Bursa ve dolayında MÖ 4000'li yıllardan itibaren çeşitli yerleşimlerin olduğu saptanmıştır; ancak yöreye ilişkin kesin bilgiler MÖ 700'lere dayanmaktadır. Homeros, bölgeden Mysia olarak söz etmektedir. Günümüzde Bursa yöresinde Mysia yerleşmelerini anımsatan iki köy bulunmaktadır: Misi (Gümüştepe) ve Misebolu. Ayrıca Prof. Dr. Semavi Eyice, belgesel yönetmeni Tekin Gün yaptığı yüzey çalışmaları sırasında Kentin 14 km batısında, Çayırköyü'nün 1 km güneybatısındaki “Çayırköy Höyüğü'nün” boyutları da Demirtaş Höyüğü ile aynıdır. Burada bulunan seramik parçalarında gri, kırmızı, kahverengi ve siyah renkler egemendir. Bulunan seramik parçalarının önemli kısmı elde yapılmış, çok azı ise çarkta yapılmıştır. Höyüğün en eski buluntusu MÖ. 2700-2500 yılına erken Bronz Çağı'na işaret etmektedir.
                    
                    Bursa, 1204-1261 yılları arasında İznik'e bağlıdır, genelde kale içinde kalmış, çok büyüyememiştir.
                    
                    <h4>Osmanlı Dönemi</h4>
                    Anadolu Selçuklu Devleti'nin zayıflayıp dağılmaya başlamasıyla kurulan Anadolu Beylikleri içinde zamanla gelişen Osmanlı Beyliği, çevredeki tekfurların arazilerini de alarak güçlenmiştir. Bursa, 1307 yılında Osman Bey tarafından kuşatılmış, uzun süren kuşatmadan sonra 6 Nisan 1326'da Osman Bey'in oğlu Orhan Bey tarafından alınmıştır. 1335 yılında başkent Bursa'ya taşınmış ve kentte büyük bayındırlık hareketleri yaşanmıştır.
                    
                    Osmanlılar Bursa'yı aldıklarında kent yalnızca hisar içinden oluşmuşken, Orhan Gazi kenti hisarın dışına çıkararak Orhan Gazi Külliyesini kurdurtmuştur. Surlar dışında var olan yerleşmeye yakın, egemen noktalarda cami, hamam, imarethane, darüşşifa, medrese gibi kamu yapıları inşa edilerek bu külliyelerin çevrelerinde konut alanları yaratılmış ve böylece bir yerleşme geleneği başlamıştır. Başkent, 1363 yılında (I. Murad Hüdavendigâr döneminde) Edirne'ye taşınmıştır. Fatih Sultan Mehmed'in İstanbul'u fethetmesinden sonra ise Bursa'nın faal rolü son bulmuş ve yönetim merkezi niteliğini yitirmiştir.
                    
                    Bursa'da Osmanlı Devleti egemenliğinde, 1922 yılına kadar, Müslüman, Rum, Ermeni ve Yahudiler birlikte yaşamışlardır.
                    
                    Tanzimat sonrası dönemde Hüdavendigâr Vilayeti merkezliği yapan Bursa'ya 1900'lü yılların başında Biga (merkezi Çanakkale), Bilecik, Kütahya, Karesi (Balıkesir), Karahisar (Afyon) sancakları bağlı bulunmaktaydı.
                    
                    Millî mücadele dönemlerinde çeşitli ayaklanmaların yaşandığı Bursa, 8 Temmuz 1920'de Yunanlarca işgal edilmiş; Başkomutanlık Meydan Muharebesi'nden sonra 11 Eylül 1922'de Türk birliklerince geri alınmıştır.
                    
                    <h4>Cumhuriyet Dönemi</h4>
                    Bursa, 1987 yılında çıkarılan 3391 sayılı kanun ile büyükşehir unvanı kazandı. Başlangıçta üç ilçe (Nilüfer, Osmangazi ve Yıldırım) Bursa Büyükşehir Belediyesi'nin sınırları içine alındı. 2004 yılında çıkarılan 5216 sayılı yasa ile büyükşehir belediyesinin sınırları valilik binası merkez kabul edilerek yarıçapı 30 kilometre olan dairenin sınırlarına genişletildi. Bu sınırlar içinde kalan 7 ilçe, büyükşehir ilçe belediyeleri hâline geldi. 2012 yılında çıkarılan 6360 sayılı yasa ile 2014 Türkiye yerel seçimlerinin ardından büyükşehir belediyesinin sınırları il mülki sınırları oldu.
                    <p>
                <h2>Bursa'nın Coğrafi Özellikleri</h2>
                <p>Bursa’nın yüzölçümü 10.819 km kare, rakımı 155m.'dir. Güneydeki toprakları Ege bölgesi sınırları içine girer. İznik gölünün güneyinde Gemiç Dağı da denen Katırlı Dağı (1283 m) ve Avdan Dağı yer alır. Ovanın güneyinde 2543 m ye ulaşan Uludağ yer alır.</p>
                <p>Marmara ve Ege bölgeleri arasında bir geçiş alanında yer alan Bursa’nın iklimi karmaşık bir yapı gösterir. Kuzey kesiminde Akdeniz ikliminin Marmara kıyılarına özgü tipi etkili olurken güney ve iç kesimlerinde İçbatı Anadolu’nun karasal iklimi görülür. En düşük hava sıcaklığı Gemlik ve Mudanya’da -10 derecenin altına düşmezken Bursa’da -25 dereceyi bulur. Bunun nedeni Uludağ gibi bir yükseltinin Bursa’nın hemen yanı başında yer almasıdır.Yerin karla kaplı olduğu ortalama  süre Uludağ’da 6 ay, Bursa’da  10 gün,  Gemlik ve Mudanya’da bir haftadan azdır. </p>
                <h2>Bursa'nın Popülasyonu</h2>
                <p>Bursa, Türkiye'nin bir ilidir. Merkezi Bursa olan il, 2023 sonu itibarıyla 3.214.571 nüfusa sahiptir. Bu nüfusuyla İstanbul, Ankara ve İzmir'den sonra Türkiye'nin 4. Büyük kentidir. Aynı zamanda Marmara Bölgesi'nin İstanbul'dan sonraki en büyük ikinci şehridir.İlin yüzölçümü 10.811 km2'dir. İlde km2'ye 297 kişi düşmektedir. Yoğunluğun en fazla olduğu ilçe: 5950 kişi ile Yıldırım'dır. 6 Şubat 2024 TÜİK verilerine göre 17 ilçe ve belediye, bu belediyelerde toplam 1061 mahalle bulunmaktadır.</p>
                
    
            </article>
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