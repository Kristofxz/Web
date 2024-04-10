<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bejelentkezes</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="icon" href="kepek/logo.avif">
    <link rel="stylesheet" href="css/bej.css">
</head>
<body>
<nav><img src="kepek/logo.avif" id = "logo" alt="">
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
    <h1 id="felirat">Bejelentkezés</h1>
    <div id="bejelentkezes">
        <form action="#">
            <label for="email">Email cím</label>
            <input type="text" id="email" name="email" placeholder="Írja be az emailcímét...">

            <label for="jelszo">Jelszó</label>
            <input type="text" id="jelszo" name="jelszo" placeholder="Írja be a jelszavát...">

            <p id="elfelejtettJelszo"><a href="#">Elfelejtette a jelszavát?</a></p>
            <input  type="submit" value="Bejelentkezés">
        </form>
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