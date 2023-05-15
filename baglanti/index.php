<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>262 Rent A Car</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--! header section start  -->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo" />
        </a>
        <nav class="navbar">
            <a href="#anasayfa">Ana Sayfa</a>
            <a href="#hakkimizda">Hakkımızda</a>
            <a href="#araclistesi">Araç Listesi</a>
            <a href="#aracgorselleri">Araç Görselleri</a>
            <a href="#kiralamabilgileri">Kiralama Bilgileri</a>
            <a href="#musteribilgileri">Müşteri Bilgileri</a>
            <a href="#odemebilgileri">Ödeme Bilgileri</a>
        </nav>
    </header>
    <!--! header section end  -->

    <!--! home section start  -->
    <div class="content">
        <section class="home" id="anasayfa">
            <h3>
                Kocaeli'nin en güvenilir araç kiralama sitesine hoş geldiniz.<br>
                BİZE ULAŞIN<br>
                +09 262 324 11 35<br>
                262rentacar@gmail.com
            </h3>
        </section>
    </div>
    <!--! home section end  -->

    <!--! hakkimizda section start  -->
    <section class="hakkimizda" id="hakkimizda">
        <div>
            <h3>
                hakkımızda<br>
                <p>
                Biz Kimiz?<br>
                Araç kiralamada daima yeni ve güvenli araçlar ve yüksek hizmet kalitesi sunan 262 Rent A Car, çatısı altında bulunduğu topluluğun 30 yıldan fazla <br>
                kurumsal otomotiv sektörü deneyimini, yenilikçi vizyonu ve uzman kadrosu ile birleştirerek, kısa sürede araç kiralama sektörünün lider oyuncularından biri haline gelmiştir.<br>
                Tamamı yerli sermaye ile kurulan 262 Rent A Car, Günlük Kiralama Hizmetinin yanı sıra 262 Rent A Car Filo ile kurumsal şirketlere Uzun Dönem Filo Kiralama Hizmeti vermektedir.<br>
                Vizyonumuz<br>
                Ülkemizde araç kiralama sektörünün en Güçlü yerli markası olmak ve kıyaslanamaz müşteri sadakatini sağlamaktır.<br>
                Misyonumuz<br>
                Araç kiralamada daima yeni ve güvenli araç, yüksek hizmet kalitesi ve ekonomik fiyat garantisi sunmaktır.
                </p>
            </h3>
        </div>
    </section>
    <!--! hakkimizda section end  -->

    <!--! arac listesi section start  -->
    <section class="araclistesi" id="araclistesi">
        <div>
            <h3>
                Araç Listesi
                <?php include('arac_listesi.php'); ?>
                

            </h3>
        </div>
    </section>
    <!--! arac listesi section end  -->
    <!--! arac gorselleri section start  -->
    <section class="aracgorselleri" id="aracgorselleri">
        <div class="aracgorselleribaslik">
            <h3>Araç Görselleri</h3>
            <div class="arac_gorselleri">
                <img src="images/Audi.jpg" alt="aracgorseli">
                <h3>Audi A4</h3>
                <img src="images/mercedes-benz.jpg" alt="aracgorseli">
                <h3>Mercedes</h3>
                <img src="images/dacia-sandero.jpg" alt="aracgorseli">
                <h3>Dacia Sandero</h3>
                <img src="images/fiat-egea.jpg" alt="aracgorseli">
                <h3>Fiat Egea</h3>
                <img src="images/Skoda-Superb.jpg" alt="aracgorseli">
                <h3>Skoda Superb</h3>
                <img src="images/Toyota-Corolla.jpg" alt="">
                <h3>Toyota Corolla</h3>
                <img src="images/volkswagen-polo.jpg" alt="">
                <h3>Volkswagen Polo</h3>
            </div>
        </div>
    </section>
    <!--! arac gorselleri section end  -->

    <!--! kiralama bilgileri section start  -->
    <section class="kiralamabilgileri" id="kiralamabilgileri">
        <div>
            <h3>
                Kiralama Bilgileri
                <?php include('kiralama.php'); ?>
            </h3>
        </div>
    </section>
    <!--! kiralama bilgileri section end  -->

    <!--! müşteri bilgileri section start  -->
    <section class="musteribilgileri" id="musteribilgileri">
        <div>
            <h3>
                Müşteri Bilgileri
                <?php include('kullanicilar.php'); ?>
            </h3>
        </div>
    </section>
    <!--! müşteri bilgileri section end  -->

    <!--! ödeme bilgileri section start  -->
    <section class="odemebilgileri" id="odemebilgileri">
        <div>
            <h3>
                Ödeme bilgileri
                <?php include('odeme.php'); ?>
            </h3>

        </div>
    </section>
    <!--! ödeme bilgileri section end  -->

    <!--! footer section start  -->
    <section class="footer">
        <div class="links">
            <a href="#">Ana Sayfa</a>
            <a href="#">Hakkımızda</a>
            <a href="#">İletişim</a>
        </div>
        <div class="credit">
            Türkiye'de araç kiralama sektörünün lideri!
        </div>
    </section>
    <!--! footer section end  -->
</body>
</html>