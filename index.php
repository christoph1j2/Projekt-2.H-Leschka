<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="Website Icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka">
    <meta name="keywords" content="home,projekt,sklad,uvod">
    <meta name="description" content="Úvodní stránka pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="logo" id="logo">
        <h1>Sklad™</h1>
        <?php
            $date = date('d-m-Y');
            echo "<p class='date date-right'>Dnešní datum: $date</p>"
        ?>
    </header>
    <nav>
        <ul>
        <li><a href="index.php"><img src="home.png"></a></li>
        <li><a href="produkt1.php"><img src="sneakers.png"></a></li>
        <li><a href="produkt2.php"><img src="smartphone-call.png"></a></li>
        <li><a href="produkt3.php"><img src="sweatshirt.png"></a></li>
        <li><a href="produkt4.php"><img src="headphones.png"></a></li>
        </ul>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
            <div class="container">
                <article>
                    <h2>Co jsme?</h2>
                    <p>Vítejte ve Skladu™ - inovativním skladovém řešení, které slouží jako vizualizace vaší široké nabídky produktů. U nás najdete ideální prostor pro uložení a přehlednou prezentaci bot, mikin, telefonů a sluchátek. Nejde o klasický eshop, ale o skladový systém, který vám umožňuje efektivně spravovat a zobrazovat vaše zboží. Máte-li obchod s těmito produkty, nabízíme vám kompletní a přizpůsobitelné skladové prostory, které vám pomohou prezentovat vaši nabídku a posílit váš prodej.</p>
                </article>
                <article>
                    <h2>Jak fungujeme?</h2>
                    <p>Využíváme nejmodernější technologie, abyste mohli snadno a přehledně prezentovat vaše boty, mikiny, telefony a sluchátka. Každý kus zboží je pečlivě uspořádán a zobrazen, takže potenciální zákazníci mohou získat přesnou představu o dostupných produktech. S naší intuitivní online platformou můžete snadno aktualizovat inventář a sdílet detailní informace včetně fotografií a popisů. Vaše produkty budou prezentovány atraktivním a profesionálním způsobem, který přiláká zákazníky a pomůže vám získat konkurenční výhodu.</p>
                </article>
                <article>
                    <h2>Proč existujeme?</h2>
                    <p>Protože vizualizace je klíčem k úspěchu. Sklad™ vám umožňuje přesně a přehledně zobrazit vaši nabídku bot, mikin, telefonů a sluchátek, což vám pomáhá přitáhnout a zaujmout zákazníky. Možnost fyzicky vidět a prozkoumat produkty před nákupem je pro zákazníky velmi atraktivní. Díky našemu skladovému systému mohou zákazníci procházet a objevovat vaši širokou nabídku, což vede ke zvýšení zájmu o vaše produkty a potenciálně k vyšším prodejům. Sklad™ vám umožňuje prezentovat vaše zboží takovým způsobem, který osloví zákazníky a pomůže vám budovat úspěšný obchod.</p>
                </article>
            </div>
        <hr>
        </section>
        <!-- Obrázky = odkazy na stránky -->
        <!-- PRODUKT1 -->
        <section class="desc top">
            <div class="container product">
            <article>
                <p>Naše běžecké <strong>boty</strong> kombinují inovativní technologie a komfortní design, aby vám poskytly nejlepší běžecký zážitek. Odlehčený materiál a pružná podrážka zajišťují optimální odraz a odstranění nárazů, zatímco prodyšný svršek udržuje vaše nohy suché a pohodlné. Nezáleží na tom, zda jste začátečník nebo zkušený běžec, naše běžecké boty vám pomohou dosáhnout vašich cílů a překonat své limity. Objevte výkon, pohodlí a styl ve svých krocích s našimi běžeckými botami.</p>
            </article>
            <article>
                <a href="produkt1.php"><img src="boty.png" alt="produkt1"></a>
            </article>
            </div>
        </section>
        <!-- PRODUKT2 -->
        <section class="desc">
            <div class="container product">
            <article>
                <a href="produkt2.php"><img src="telefony.png" alt="produkt2"></a>
            </article>
            <article>
                <p>Naše <strong>telefony</strong> přinášejí technologii do vašich rukou, spojujíce výkon, inovace a stylový design. S jasným a ostrým displejem, vysokým výkonem procesoru a vylepšenými kamerami zachytíte každý okamžik v  neuvěřitelné kvalitě. Pohotové připojení k internetu a rychlé načítání aplikací vám umožní být stále propojeni s digitálním světem.  Ať už jde o práci, zábavu nebo komunikaci, naše telefony vám poskytnou nejlepší uživatelský zážitek. Vstupte do světa neomezených možností a objevte, co všechno můžete s našimi špičkovými telefony dokázat.</p>
            </article>
            </div>
        </section>
        <!-- PRODUKT3 -->
        <section class="desc">
            <div class="container product">
            <article>
                <p>Naše <strong>mikiny</strong> jsou spojením pohodlí, stylu a kvality, které vás zahřejí a zároveň vám dodají trendový vzhled. S měkkým a příjemným materiálem se stanou vašimi nejoblíbenějšími společníky na každodenních dobrodružstvích. Nezáleží, zda si vyberete klasický střih nebo moderní design, naše mikiny nabízejí širokou paletu barev a vzorů, které ladí s vaším osobním stylem. Kvalitní provedení a precizní detaily zajišťují jejich dlouhou životnost a stále skvělý vzhled. Přidejte si pohodlí a styl do svého šatníku s našimi atraktivními mikinami.</p>
            </article>
            <article>
                <a href="produkt3.php"><img src="mikina.png" alt="produkt3"></a>
            </article>
            </div>
        </section>
        <!-- PRODUKT4 -->
        <section class="desc">
            <div class="container product">
            <article>
                <a href="produkt4.php"><img src="sluchatka.jpg" alt="produkt4"></a>
            </article>
            <article>
                <p>Představujeme vám nejnovější revoluci ve světě poslechu hudby - <strong> sluchátka</strong>, která vám přináší absolutní zvukovou kvalitu a neomezenou volnost pohybu. S našimi nejmenovanými sluchátky se poslech hudby stává neuvěřitelným zážitkem plným detailů a emocí. Naše sluchátka jsou vybavena nejmodernějšími zvukovými technologiemi, které vám umožní prožít každou notu s naprostou precizností. Zvukový výkon je plný bohatých basů, živých středních frekvencí a jasných výšek. Staňte se součástí hudby a nechte se unést do světa nekonečných melodií.</p>
            </article>
            </div>
        </section>
        <!-- FORMS UVOD -->
        <section class="forms">
            <!-- hodnocení -->
            <form method="get">
                <label for="hodnoceni">Ohodnoť číslem od 1 do 10</label><br>
                <input type="number" id="hodnoceni" name="hodnoceni" min="1" max="10"><br>
                <input type="submit" value="Odeslat" name="send1">
                <input type="submit" value="Vypsat" name="print1">
            </form>
            <!-- anketa -->
            <form method="get">
                Jakým způsobem preferujete informace o nových produktech nebo slevách?<br>
                <input type="radio" name="anketa" value="email">E-Mail<br>
                <input type="radio" name="anketa" value="mobil">Mobil<br>
                <input type="radio" name="anketa" value="reklama">Reklama<br>
                <input type="submit" value="Odeslat" name="send2">
                <input type="submit" value="Vypsat" name="print2">
            </form>
        </section>
    </main>
    <footer>
        <?php
            echo "<p class='cpr'>©Ernst Christoph Leschka 2023</p>";
            echo "<p class='date2'>Dnešní datum: $date</p>";
        ?>
    </footer>
</body>
</html>