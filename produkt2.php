<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="Website Icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka, Matěj Horešovský, Adam Kolerus">    <meta name="keywords" content="produkt,projekt,sklad,explore">
    <meta name="description" content="Stránka jednoho z produktů pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Telefony</title>
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
        <li><a href="index.php"><img src="home.png" alt="home"></a></li>
        <li><a href="produkt1.php"><img src="sneakers.png" alt="sneakers"></a></li>
        <li><a href="produkt2.php"><img src="smartphone-call.png" alt="smartphone"></a></li>
        <li><a href="produkt3.php"><img src="sweatshirt.png" alt="sweatshirt"></a></li>
        <li><a href="produkt4.php"><img src="headphones.png" alt="headphones"></a></li>
        </ul>
        <!-- DOPLNIT PRODUKTY! -->
    </nav>
    <main>
        <section>
        <h2 id="product_header">Telefony</h2>
            <div class="container product">
            <article>
                <p>V dnešním digitálním světě jsou telefony nezbytnou součástí našeho každodenního života. V Skladu™ chápeme, že kvalitní prezentace telefonů je klíčová pro zaujetí zákazníků a vytvoření důvěry v jejich kvalitu a funkčnost. Naše skladové prostory poskytují ideální prostředí pro vystavení telefonů a umožňují zákazníkům si je prohlédnout a vyzkoušet přímo na místě. S pomocí Skladu™ můžete prezentovat různé značky, modely a technologické inovace, které telefonní trh nabízí. Vytvořte svým zákazníkům nezapomenutelný zážitek při prohlížení a výběru telefonů v našem skladu.</p>
            </article>
            <article>
                <p>V Skladu™ chceme, aby vaše telefony zaujaly a upoutaly zraky zákazníků již na první pohled. Proto jsme navrhli skladové prostory tak, aby byly esteticky příjemné, dobře osvětlené a nabízely pohodlné prostory pro prohlížení telefonů. Díky tomu zákazníci mohou vidět a dotknout se nejnovějších modelů, rozhraní a funkcí přímo ve vašem skladu. Ať už nabízíte chytré telefony, telefonní příslušenství nebo novinky v mobilním světě, Sklad™ je prostorem, který vám umožní prezentovat je s jasným záměrem a profesionálním přístupem. Připravte se na rostoucí zájem zákazníků.</p>
            </article>
            </div>
        </section>
        <section class="forms">
            <!-- select + print (2 prvky formuláře) -->
            <form>

            </form>
            <!-- tabulka s výpisem -->
            <!-- TODO -->
        </section>
    </main>
    <footer>
        <?php
            echo "<p class='cpr'>©Ernst Christoph Leschka</p>";
            echo "<p class='date2'>Dnešní datum: $date</p>";
        ?>
    </footer>
</body>