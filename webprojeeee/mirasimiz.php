<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirasımız</title>
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
        <h1>MİRASIMIZ</h1>
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
            <h1>Ulu Camii</h1>
            <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image1" src="resources/ulucami.jpg" alt="ulucami">
                            <img id="image2" src="resources/ulucami12.jpg" alt="ulucami iç">
                            <img id="image3" src="resources/ulucami3.jpg" alt="ulucami iç">
                            <img id="image4" src="resources/ulucami4.jpg" alt="ulucami dış">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image1"></a>
                            <a href="#image2"></a>
                            <a href="#image3"></a>
                            <a href="#image4"></a>
                        </div>
                    </div>
                </section>
            <p>Kent merkezinde, Atatürk Caddesi üzerindedir. Osmanlı sultanlarından Yıldırım Bayezıd tarafından yaptırılmış olup, 1400 yılında tamamlanmıştır. Mimarının Ali Neccar olduğu sanılmaktadır. Mülkiyeti Vakıflar Genel Müdürlüğü’ne aittir.</p>

            <p>Caminin inşasına ait bir menkıbe vardır. Rivayete göre; Yıldırım Bayezıd, Niğbolu muharebesinde muzaffer olunca yirmi cami yaptırmaya karar verir. Bursa’ya geldiğinde bu fikrini damadı olan Emir Sultan’a söylemiş, O’da yirmi cami yerine yirmi kubbeli bir cami yapılmasını tavsiye etmiştir. Caminin yeri de Emir Sultan’a, rüyasında manevi bir işaretle gösterilmiş, ertesi gün bu işaret edilen yerde çimen bittiği görülerek caminin yeri tespit edilmiştir. Karar Padişaha bildirilmiş, Padişah da bunu uygun görerek caminin inşasını başlatmıştır. Cami, Niğbolu zaferinde kazanılan ganimet mallarıyla yaptırılmıştır.</p>

            <p>Ulu Camii ile ilgili bir diğer menkıbe de şadırvanı hakkındadır; Caminin inşaatı esnasında şadırvanın yerinde yaşlıca bir kadına ait bir ev olduğu ve gönül rızası ile satmadığı için devlet büyüklerinin İslam hukukuna saygıları gereği zorla almadığı anlatılır. Bu ev, namaz kılma mahalli dışında olmak kaydıyla ve üstü açık şekilde öylece bırakılmıştır. Kadının vefatından sonra bu yerin camiye dahil edildiği rivayet edilmektedir. Boş bırakılan bu yerde bulunan şu anki şadırvan daha sonraki yıllarda İstanbul’dan Bursa’ya siyasi sürgün olarak gelen Karaçelebizade Abdulaziz Efendi tarafından yaptırılmıştır. Seyyah Evliya Çelebi 1640’lı yıllarda suyu Uludağ’dan gelen bu güzel havuzun içinde alabalıkların yüzdüğünü ifade eder. En tepeden Allah’ın birliğini ifade edercesine tek merkezden kaynayan bu şadırvanın suyu, havuza dökülürken Allah’ı teşbih eder gibi otuz üç ayrı yerden akmaktadır.</p>

            <p>Caminin ilk imam-hatibi, Mevlid-i Şerif yazarı Süleyman Çelebi’dir. Mevlid-i Şerif’i yazmasına vesile olan meşhur hadise burada cereyan etmiştir. 1409 yılı Ramazan ayında ikindi namazını müteakip kürsüye çıkan vaiz efendi, konuşması esnasında “Rasüller arasında fark yoktur…” (Bakara 285) ayetinin tefsirini yaparken, cemaatten biri itiraz ederek “Risalet yönüyle aralarında fark olmasa bile benim peygamberim Hz. Muhammed (s.a.v.), fazilet açısından hepsinden üstündür.” der. Bu mesele tartışma konusu olur. Bu konuşmaya şahit olan Süleyman Çelebi o dakikadan itibaren Hz. Peygamber’in faziletlerini anlatan Mevlid-i Şerif’ini yazmaya karar verir. Mevlid-i Şerif Türkçe yazılmış olup yaklaşık bin beyittir.</p>

            <p>Hutbe’nin sağ tarafında yüksekçe bir yere asılan siyah örtü, Kabe kapısının örtüsüdür. Mısır Seferi’nden sonra halife olan Yavuz Sultan Selim, Mekke’de onarıma girişmiş, bu arada Kabe’nin örtüsünü İstanbul’dan gönderilen yeni örtü ile değiştirmiştir. Yavuz, eski örtüyü ise Bursa’ya getirtip Ulu Cami’ye hediye etmiş ve kendi elleri ile taşıyıp asmıştır. Saf altın iplik ile üzerine ayetler işlenmiş bu örtü, yüzyıllar boyu kararmadan kalmıştır ;ancak yapılan bazı hatalı restorasyonlar sonucu caminin rutubet alması üzerine işlemeleri dökülmüş olduğundan günümüzde ayetler ancak parlak ışık altında görülebilir.</p>

            <p>Yapılış tarzı açısından Osmanlı mimarisinde özgün bir yapı olan Ulu Camii, 55,00 x 69,00 metre ölçülerinde, dikdörtgen planlı bir yapıdır. Toplam iç alanı 3.165,5 m2’dir. Türkiye’deki “Ulu Cami” ismindeki camilerin en büyüğüdür. Mihrabın bulunduğu duvar diğer duvardan daha büyüktür. On iki ayak üzerine yirmi kubbe ile üzeri örtülmüş olan caminin ortasındaki kubbenin üstü açıktır. Son yıllarda bu açıklık camla kaplanmıştır. Duvarları tümüyle düzgün kesme taş ile örülmüştür.</p>

            <p>Ankara savaşında Yıldırım Bayezıd’ı yenen Timur, orduları ile Bursa’ya gelip, caminin kuzey kapısını yakarak tahrip etmiştir. Karamanoğlu Mehmet Bey tarafından da çevresine odun yığılarak yakılmıştır. 1855 yılında meydana gelen depremde caminin on sekiz kubbesi çökmüş, sadece batı minaresinin dibindeki kubbe ile mihrap önü kubbesi ayakta kalmıştır. 1889 yılında çıkan bir yangında minarelerin ahşap olan külahları yanmış, sonrasında kâgir olarak yeniden yapılmıştır. 1959-1961 yıllarındaki onarımlarda sıvalı olan duvarlar kazınmış, kuzey yönündeki kapı da aslına uygun olarak yeniden yapılmıştır. 1494, 1503, 1551, 1563, 1567, 1572, 1668, 1670, 1724, 1742, 1815, 1855 ve1861 yıllarında büyük çapta onarımlar yapılmış, bugünkü görünümüne kavuşmuştur.</p>

            <p>14. yüzyıl izlerini taşıyan sekiz sıraya düzenlenmiş istalaktitleri, dış yan köşelerde kum saati biçimli sütunceleri ile zengin görünümlü olan mihrap, 1751 yılında tamamlanmıştır. Sol tarafında mihrabı yapan Mehmet ustanın adı yazılıdır. Ceviz ağacından yapılmış ve siyah renge boyanmış olan minber, caminin en güzel en sanatkarane işlenmiş, eşine az rastlanır bir sanat eseridir. Kapısı üzerinde bulunan 0,40 x 1,00 metre boyutlarındaki kitabede, Yıldırım Bayezıd’in emri ile 802 H. (1400) yılında tamamlandığı belirtilmektedir. Minber, Manisa da Saruhanlı İshak Bey’in 1379 tarihli Ulu Camii minberini yapan Antepli Hacı Mehmet b. Abdülaziz el Dukki’nin eseridir. Bu bilgiyi veren yazı, minberin sağ korkuluğunda dikey olarak yazılmıştır. Künkedari Sanatı ile yapılmıştır. Tutkal ve çivi kullanılmadan, geometrik şekilde oyularak birbirine geçme ile meydana getirilmiş bir eserdir. Doğu yüzünde bazı çıkıntıları vardır ve bunların güneş sistemi ile gezegenler olduğu söylenir. Üzerindeki işlemeler ile bu minber, Selçuklu üslubundan Osmanlı üslubuna geçişin bir şaheseridir.</p>

            <p>Zarif sekiz sütun üzerine oturan yüksek ve sade müezzin mahfili 1549 yılında yaptırılmıştır. Mahfilin karşısındaki ayağa yerleştirilmiş yuvarlak tek parça mermerden oyulmuş taş kürsü, 1815 yılında yaptırılmıştır. Caminin doğu, batı ve kuzey yönünde olmak üzere üç kapısı vardır. Bu kapılardan kuzey ve batı yöndekiler yeni olup, doğudaki kapı kanatları camiyle aynı dönemde yapılmıştır. Ahşap kanatları ceviz ağacındandır. Bazı yerleri bozulmuş olmasına rağmen, günümüze kadar sağlam olarak gelebilmiştir. Oyma ve geçmeli geometrik motiflerle süslü kanatlar, caminin minberine uygun olarak 16. Yüzyılın karakteristik özelliğini taşımaktadır. Kuzey yönündeki avluya açılan taç kapısının görümünü, eserin heybetini bir kat daha artırmaktadır. Kavsarası on bir sıra düzenlenmiş istalaktitlerden oluşmakta, parlak nişinin etrafını geniş ve sade bir silme dolanmaktadır.</p>

            <p>Caminin pencereleri biçim ve ölçü bakımından her cephede farklı olup, söveleri düz mermerlidir. Pencere alınlıklarında “nefeslik” denilen küçük açıklıkları bulunmaktadır. Güney duvarındaki bir alt sıra pencereler, sonradan kapatılmıştır. Üst sıra pencereler, alt sıra pencerelerle aynı eksen üzerinde değildir. Duvar kalınlıkları birbirinden farklıdır. Doğu 2,80 metre, batı 3,10 metre, kuzey 2,40 metre ve güney duvarı ise 2,20 metre kalınlığındadır.</p>

            <p>Ulu Cami’nin iç duvarlarını süsleyen levhaların çoğunun altında, hattatının imzası bulunmaktadır. Büyük çoğunluğunun eksikleri Hattat Şefik Bey tarafından düzeltilmiş veya yeniden yazılmıştır. Cami içinde 13 ayrı yazı karakteri ile 41 ayrı hattat tarafından, duvara yazılmış 87, levha halinde 105, tamamı 192 adet yazı mevcuttur. Ayrıca çok değerli saatler, şamdanlar, Kur’an-ı Kerimler bulunmaktadır.</p>

            <p>Cami, doğu ve batı köşelerinde iki minareye sahiptir. Batıda yer alan minare, Yıldırım Bayezıd tarafından yaptırılmıştır. Camiye bitişik olan minare kaidesi tamamen mermerden olup, gövdesi tuğla örtülüdür. Dıştan ve işten olmak üzere bu minareye çıkan iki yol vardır. Birisi kubbelere, diğeri şerefesine çıkar. Şerefeler iki minarede de eş olup, altı sıra tuğla istalaktitlerle düzenlenmiştir. Cami avlusunda üç şadırvan bulunmaktadır. Cami içerisindeki şadırvanın, Osmanlı Devleti’nin ilk yıllarında, Türklerin suya olan ilgilerinden kaynaklanarak tasarladığı tahmin edilmektedir. On altı köşeli havuz, üç çanaklı fıskiyeden sekiz kol halinde dökülen sularla dolarak musluklara dağıtılmaktadır. Mihrap ekseni ile her üç kapının ekseni şadırvanın merkezinde birleşmektedir.</p>
            <h1>Irgandı Köprüsü</h1>
            <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image6" src="resources/irgandikoprusu.jpeg" alt="ırgandı köprüsü">
                            <img id="image7" src="resources/irgandikoprusu2.jpg" alt="ırgandı köprüsü içi">
                            <img id="image8" src="resources/ırgandıkoprusu3.jpg" alt="ırgandı köprüsü içi">
                            <img id="image9" src="resources/irgandikoprusu4.jpg" alt="ırgandı köprüsü gece">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image6"></a>
                            <a href="#image7"></a>
                            <a href="#image8"></a>
                            <a href="#image9"></a>
                        </div>
                    </div>
                </section>
            <p>II. Murad döneminde, 1442 yılında, Ali oğlu Hoca Muslihuddin tarafından inşa ettirilmiştir. Hoca Muslihuddin Azerbaycan’dan aldığı ipeği İtalyan tüccarlara satan, dönemin önemli tüccarlarındandır. Bursa’nın 15. Yüzyılda önemli bir ticaret merkezi olması sürecinde rol oynayan imar faaliyetleri kapsamında tüccarların da ticaret amaçlı yapıları inşa ettirdikleri bilinmektedir. Üstündeki arastası ve köprü ana yapısı içindeki ahır ve depoları ile inşa edilen Irgandı Köprüsü bunlardan biridir. Köprünün mimarı Abdullah oğlu Timurtaş olarak bilinmektedir.</p>

            <p>İtalya’da Vecchio ve Rialto Köprüleri, Bulgaristan’da Osma Köprüsü ile birlikte dünyadaki dört çarşılı köprüden biridir.</p>

            <p>Gökdere üzerinde yer alan ve şehrin merkezini doğusuna bağlayan köprülerden yukarıdan aşağıya doğru üçüncüsüdür.</p>

            <p>Köprünün ilk yapıldığı dönemde kagir olduğu, her iki tarafta 16 bölüm olmak üzere, toplam 31 dükkan, 1 mescit, ayaklarında ise depo ve ahır bölümlerinin bulunduğu bilinmektedir.</p>

            <p>Günümüzde köprü ana yapısı 16 metre açıklığında ve 11 metre genişliğinde bir kemer den oluşmakta olup, kemerin iki yanında tonozla örtülmüş iç mekanlar bulunmaktadır. Çarşıdaki 18 dükkan ahşap iskelet sistemle yapılmış olup, payandalarla desteklenen cumbalarla Gökdere’ye doğru uzanmaktadırlar ve bazılarının altında depoları bulunmaktadır.</p>

            <p>Irgandı Köprüsü 19. yüzyılın ikinci yarısında ahşap dükkanların yan yana dizildiği üstü açık bir çarşı haline gelmiştir. 1922’de işgal kuvvetleri Bursa'yı terkederken köprüyü bombalayarak yıkmışlardır. 1949’da betonarme olarak çarşısız hali tekrar inşa edilen köprünün 2004 yılında rekonstrüksiyonu gerçekleştirilerek orjinal haline döndürülmüştür.</p>
            <h1>Tophane</h1>
            <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image11" src="resources/tophane4png.png" alt="tophane">
                            <img id="image12" src="resources/tophane2.jpg" alt="tophane parkı">
                            <img id="image13" src="resources/tophane3.jpg" alt="tophane uzaktan">
                            <img id="image14" src="resources/tophane4.jpg" alt="tophane uzaktan">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image11"></a>
                            <a href="#image12"></a>
                            <a href="#image13"></a>
                            <a href="#image14"></a>
                        </div>
                    </div>
                </section>
            <p>Tophane Saat Kulesi Bursa'da Osmanlı padişahı II. Abdülhamit'in tahta çıkışının 29. yılı şerefine inşa edildiği rivayet edilen tarihî saat kulesi.</p>

            <p>Osmanlı dönemi mimarisini yansıtan önemli bir anıtsal eserdir. Tophane Parkı içinde, İmparatorluğun kurucusu Osman Gazi ile ikinci padişahı Orhan Gazi'nin türbelerinin arkasında, eski adı Meydanı-ı Osmaniye olan Tophane Meydanı'ndadır. Bulunduğu yerden panoramik Bursa manzarasının görünmesi dolayısıyla, bir yangın kulesi olarak da kullanılmıştır.</p>


            <p>Aynı yerde ilk olarak Sultan Abdülaziz döneminde bir saat kulesi yaptırılmış ancak 1900'lü yıllara kadar, bilinmeyen bir tarihte yıkılmıştır. Mevcut kulenin yapımına 2 Ağustos 1904'te başlanmış, 31 Ağustos 1905'te tamamlanarak II. Abdülhamit'in tahta çıkışı şerefine, Vali Reşit Mümtaz Paşa tarafından törenle hizmete sokulmuştur.</p>

            <p>Kule 6 katlı olup 33 metre uzunluğunda ve 4,65 metre enindedir. Tepesinde dört bir yana bakacak şekilde 4 adet saat bulunacak şekilde planlanmıştır. Güney kısmında girişi bulunan kuleye, 89 basamaklı ahşap bir merdivenle çıkılmaktadır. Kulenin üst katının dört cephesinde, 90 santimetre çapında yuvarlak saatler bulunmaktadır.</p>

            <p>Günümüzde bir elektronik saate sahiptir ve Bursa Büyükşehir Belediyesi tarafından yangın gözetleme amacıyla da kullanılmaktadır.</p>
            <h1>Uludağ</h1>
            <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image16" src="resources/uludag.jpeg" alt="uludağ">
                            <img id="image17" src="resources/uludag2.jpg" alt="uludağ">
                            <img id="image18" src="resources/uludag3.jpg" alt="uludağ'da kayak yapan insanlar">
                            <img id="image19" src="resources/uludag4.jpg" alt="uludağ">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image16"></a>
                            <a href="#image17"></a>
                            <a href="#image18"></a>
                            <a href="#image19"></a>
                        </div>
                    </div>
                </section>
            <p>Uludağ, Bursa ili sınırları içinde, 2.543 m yüksekliği ile Türkiye'nin en büyük kış ve doğa sporları merkezi olan dağ. Uludağ; Marmara Bölgesinin en yüksek dağıdır. Kuzeybatı-güneydoğu doğrultusunda uzanan Uludağ'ın uzunluğu 40 km'yi bulur. Genişliği ise 15–24 km'dir. Toplu ve heybetli bir görünüşe sahip olan bu dağın Bursa'ya bakan yamaçları kademeli, güneye Orhaneli'ne bakan tarafları ise düz ve daha diktir. En yüksek noktası göller bölgesinde yer alan Uludağ tepe'dir (2.543 m). Uzaktan Bursa'ya yaklaşılırken ve oteller bölgesinde görülen yüksek tepe genelde zirve olarak algılanır. Hâlbuki Zirve gibi görünen o tepenin ismi Keşiş Tepedir ve yüksekliği 2.486 m'dir. Uludağ tepe (2.543 m) Keşiş Tepenin 5 km güneydoğusunda yer alır. Dağın kuzey tarafında Sarıalan, Kirazlı, Kadı, Sobra yaylaları vardır.</p>

            <p>Antik çağın ilk tarihçilerinden Herodot (MÖ 490-420) yazdığı Herodot Tarihi isimli kitabında Uludağ, "Olympos" olarak geçer ve Olympos'ta Lydia kralı Kroisos'un oğlu Atys'in yaşadığı trajediyi anlatır. Herodot'tan 400 yıl sonra Amasya doğumlu coğrafyacı Strabon (MÖ 64-MS 21) yazdığı 17 kitaptan oluşan Coğrafya isimli kitabında Uludağ, Olympos ve Mysia Olympos'u olarak geçer. Strabon; "Mysia" isminin aslının Lydia'lılarda gürgen ağacı anlamına gelmekte olduğunu belirtir. Roma İmparatorluğu'nda resmi din hıristiyanlık olduktan sonra Uludağ'da 3. yüzyıldan sonra keşişlerin yaşadığı ilk manastırlar kurulmaya başlanmış ve manastırlar 8. yüzyılda sayıca en üst seviyeye çıkmıştır. Uludağ'da Nilüfer çayı ile Deliçay arasındaki vadi ve tepelerde 28 manastır kurulmuştur. Orhan Gazi Bursa'yı uzun bir kuşatmadan sonra teslim almış ve dağdaki keşişlerin yaşadığı manastırların bir kısmı terk edilirken, bazılarının yerlerine Doğlu Baba, Geyikli Baba, Abdal Murat gibi müslüman dervişlerin inziva yerleri olmuştur. Bursa'nın fethinden sonra Türkler dağa "Keşiş Dağı" ismini vermişlerdir. 16. yüzyılda Bursa'ya gelen Alman seyyah Reinhold Lubenau Uludağ'ın Türklerin eline geçtikten sonra keşişlerin sadece gündüzleri ibadet için dağa çıktıkları ve manastırların harç kullanılmadan taş duvarlarla yapıldığını belirtir. "Olympos Mysios" veya "Keşiş dağı", 1925 yılında Bursa Vilayeti Coğrafya Cemiyeti'nin girişimleri ve Osman Şevki Bey’in önerisi ile "Uludağ" adını almıştır.</p>

            <p>1933'te Uludağ’a bir otel, bir de muntazam şose yol yapılmış, böylece bu tarihten itibaren Uludağ kış kayak sporları için bir merkez haline gelmiştir. Düzenli otobüs seferlerinin başlaması da buraya ilgiyi daha da artırmıştır. Sonradan asfaltla kaplanan bu yol Uludağ'ın Kadıyayla hariç bütün yerleşim birimlerini doğrudan Bursa'ya bağlar. Uludağ modern dağ tesisleri, 1963'te hizmete açılan Türkiye'nin ilk teleferiği Bursa Teleferik, dördüncü büyük kent olan Bursa'nın hemen yanında olması ile dağ ve kış turizminin merkezi olmuştur. Uludağ Türkiye'nin en büyük kayak merkezidir. Yol durumunun uygunluğu,uzun kış mevsiminde (Ekim-Nisan arası) kar bulunması, eşsiz manzaraları buraya turist çekmektedir. Dağın doruk noktasından açık havada İstanbul, Marmara denizi ve civar yakın yerlerin görünmesi buraya ayrı bir özellik vermektedir. Doğu, kuzey eteklerinin Bursa Ovasına yakın yerlerinde sıcak su kaynaklarının bulunmasından burada kaplıcalar meydana gelmiştir. Bursa'nın Çekirge semtindeki bu kaplıcalar pek çok hastalığa şifa olmaktadır. Teleferik 2014 yılında tümüyle yenilenmiş ve Kurbağakaya (Oteller) bölgesine kadar uzatılmıştır. Ayrıca teleferiğin ara istasyonu olan Sarıalan'da ve Sarıalan'dan telesiyejle ulaşılan Çobankaya'da Kızılay Derneği'nin her yaz düzenlediği yaz kampları bulunmaktadır. Kirazlıyayla'da kurulu bulunan eski senatoryum binası şu anda otel olarak kullanılmaktadır. Uludağ'da 15 adet özel ve kamuya ait 12 resmi konaklama tesisi vardır. Bunlara ait pek çok telesiyej ve teleski hattı mevcuttur.</p>

            <p>Uludağ'ın yüksek yerlerinde eski buzullara ait izlere rastlanmaktadır. Karatepe'nin kuzeyindeki Aynalıgöl, Karagöl ve Kilimligöl buzul gölleri bu izlerin en önemlileridir. Bu göllerin beyaz kar yığınları buraların güzelliğine güzellik katmaktadır. Uludağ'ın Zirvesi olan Uludağ Tepe (2543 m) altındaki kuzey çanağında kalıcı kar tabakaları bulunur. Türkiye'nin en alçakta kalıcı kar bulunan dağıdır.</p>
            <h1>Teleferik</h1>
            <section class="container">
                    <div class="slider-wrapper">
                        <a href="mirasimiz.php">
                        <div class="slider">
                            <img id="image21" src="resources/teleferik.jpg" alt="teleferik">
                            <img id="image22" src="resources/teleferik2.jpg" alt="teleferik">
                            <img id="image23" src="resources/teleferik3.jpg" alt="telferik">
                        </div>
                        </a>
                        <div class="slider-nav">
                            <a href="#image21"></a>
                            <a href="#image22"></a>
                            <a href="#image23"></a>
                        </div>
                    </div>
                </section>
            <p>Bursa Teleferik, Türkiye'nin ilk teleferik hattıdır. 29 Ekim 1963'te açılmıştır. Bursa'nın şehir simgelerinden biri olan Bursa Teleferik aynı zamanda halatlı taşımacılık alanında 9 km yatay uzunluğu ile Türkiye'nin en uzun teleferik hattıdır. İstasyonlarında bulunan eğlence merkezleri ve alışveriş dükkanları ile aynı zamanda bir yaşam merkezidir. Bünyesinde 4 istasyon barındıran Bursa Teleferik ilk istasyon olarak Güney Bursa'da yer alan Yıldırım ilçesine yakın olan Teferrüç mahallesindeki Teferrüç istasyonundan kalkmakta ve Uludağ'daki oteller bölgesine ulaşmaktadır.</p>


            <p>Cumhuriyet’in 40.yıl kutlamalarının yapıldığı 1963 yılında İsviçreli şirket Von Roll Holding tarafından ülkenin en büyük kayak merkezi Uludağ’a yapılan teleferik hattı 29 Ekim 1963’te açılmıştır. İnşaatı 1958'de başlayan hat 5 senede tamamlanmıştır.</p>

            <p>Toplamda 4 istasyon bulunmaktadır. İki istasyon arası en uzak mesafe Sarıalan ile Oteller Bölgesi arasında yer almakta ve 4212 metredir.</p>
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