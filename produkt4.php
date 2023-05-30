<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="Website Icon" href="logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ernst Christoph Leschka">
    <meta name="keywords" content="produkt,projekt,sklad,explore">
    <meta name="description" content="Stránka jednoho z produktů pro webovou aplikaci neexistujícího skladu.">
    <link rel="stylesheet" href="style.css">
    <title>Produkt4</title>
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
                <p>Sluchátka jsou nedílnou součástí moderního života plného hudby, podcastů a hands-free komunikace. V Skladu™ si uvědomujeme, že kvalitní prezentace sluchátek je klíčová pro zaujetí zákazníků a přesvědčení je o výjimečném zvuku, pohodlí a designu. Naše skladové prostory jsou speciálně navrženy tak, aby vytvářely prostředí, které nejen ukazuje sluchátka v jejich plné kráse, ale také umožňuje zákazníkům je vyzkoušet a posoudit jejich zvukovou kvalitu, pohodlí při nošení a funkčnost. V Skladu™ můžete vystavit různé typy sluchátek, od bezdrátových po noise-cancelling.</p>
            </article>
            <article>
                <p>Sklad™ vám nabízí prostor, který vám umožní vytvořit atraktivní prezentace sluchátek a přilákat zákazníky svým sortimentem. Naše skladové prostory jsou pečlivě navrženy s důrazem na optimální osvětlení, estetiku a prostorové uspořádání, abyste mohli prezentovat sluchátka tak, jak si zaslouží. Můžete vytvořit výstavní prostor, který zákazníky okouzlí a umožní jim prozkoumat různé značky, styly a technologie sluchátek, které máte k dispozici. Zákazníci budou mít možnost si sluchátka vyzkoušet, porovnat jejich výhody a vybrat si ty, které jim poskytnou dokonalý zvukový zážitek.</p>
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