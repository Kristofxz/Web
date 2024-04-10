<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laguna Pizzeria</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/foOldal.css">
    <link rel="icon" href="kepek/logo.avif">
</head>
<body>
<nav>
    <img src="kepek/logo.avif" id = "logo" alt="">
    <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="etlap.php">Étlap</a></li>
        <li><a href="kosar.php">Kosár</a></li>
        <li><a href="rolunk.php">Rólunk</a></li>
        <li><a href="kapcsolat.php">Kapcsolat</a></li>
        <li><a href="bej.php">Bejelentkezés</a></li>
        <li><a href="reg.php">Regisztráció</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="profil.php">Profil</a></li>
    </ul>
</nav>

<main>
    <div id="leiras">
        <!-- <img id="hatter" src="kepek/pizza4.jpg" alt="">-->
        <div id="leiras2">
            <h2>Üdvözöljük a Pizza Laguna online otthonában!</h2><br>
            <p class="szoveg">A Pizza Laguna egy oázis a pizzakedvelők számára, ahol kiváló minőségű és friss alapanyagokból készült, ízletes pizzák várnak.</p>
            <p class="szoveg">Hosszú évek tapasztalatával és szenvedélyünkkel az olasz konyha iránt, minden egyes szeletünkben a szeretet és a gondoskodás íze rejlik.</p>
            <p class="szoveg">Legyen szó tradicionális olasz klasszikusokról vagy egyedi, különleges ízkombinációkról, nálunk megtalálja a tökéletes választást minden alkalomra.</p>

        </div>
    </div>

    <div id="nyitvatartas">
        <h3>Nyitvatartás</h3>
        <table>
            <tr>
                <th>Hétfő:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Kedd:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Szerda:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Csütörtök:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Péntek:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Szombat:</th>
                <td>08:00-20:00</td>
            </tr>
            <tr>
                <th>Vasárnap:</th>
                <td style="color: red"><strong>Zárva</strong></td>
            </tr>
        </table>
    </div>

    <div class="container">
        <h1>Akciók</h1>
        <div class="cards">
            <div class="card">
                <h2>Disznósajtos pizza</h2>
                <img class="card_img" src="kepek/disznosajtos.jpg" alt="">
                <div class="text">paradicsomos alap, disznósajt, kolbász, lilahagyma,sajt</div>
                <h2 class="ar">2500</h2>
                <button class="btn">Kosárba</button>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <h2>Vulkán pizza</h2>
                <img class="card_img" src="kepek/vulkan.jpg" alt="">
                <div class="text">csípős alap, kéksajt,áfonya, koktélparadicsom</div>
                <h2 class="ar">2800</h2>
                <button class="btn">Kosárba</button>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <h2>Vadas pizza</h2>
                <img class="card_img" src="kepek/vadas.jpg" alt="">
                <div class="text">paradicsomos alap, szarvas ragu, sajt, uborka, koktélparadicsom</div>
                <h2 class="ar">4490</h2>
                <button class="btn">Kosárba</button>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <h2>Marmoset kedvence</h2>
                <img class="card_img" src="kepek/marmoset.jpg" alt="">
                <div class="text">paradicsomos alap, sajt, paradicsom, hagyma selyem majom feje</div>
                <h2 class="ar">44699</h2>
                <button class="btn">Kosárba</button>
            </div>
        </div>
    </div>

</main>


<footer>
    <ul class="footerList">
        <li class="footerElement"><a href="#">Home</a></li>
        <li class="footerElement"><a href="#">Services</a></li>
        <li class="footerElement"><a href="#">About</a></li>
        <li class="footerElement"><a href="#">Terms</a></li>
        <li class="footerElement"><a href="#">Privacy Policy</a></li>
    </ul>
    <p>Pizzeria</p>
    <p>Péter Gergely & Fekete Kristóf</p>
</footer>
</body>
</html>