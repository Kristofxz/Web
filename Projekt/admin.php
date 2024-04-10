<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="kepek/logo.avif">
</head>
<body>
<nav><img src="kepek/logo.avif" alt = "" id = "logo">
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
    <div id="pizzaLista">
        <h1>Pizzákhoz tartozó ID-k</h1>
        <table>
            <tr>
                <td class="elsoTd">Disznósajtos pizza</td>
                <td class="idBalra">1</td>
            </tr>
            <tr>
                <td class="elsoTd">Vulkán pizza</td>
                <td class="idBalra">2</td>
            </tr>
            <tr>
                <td  class="elsoTd">Vadas pizza</td>
                <td class="idBalra">3</td>
            </tr>
            <tr>
                <td  class="elsoTd">Selyem majom pizza</td>
                <td class="idBalra">4</td>
            </tr>
        </table>
    </div>

    <h1>Pizzák módosítása</h1>
    <div id="id">
        <form action="#">
            <label>Pizza mósosítása</label>
            <label for="pizzaKereses"></label>
            <input type="text" id="pizzaKereses" name="pizzaKereses" placeholder="Írja a pizza ID-t amit módosítani szeretne...">
            <input  type="submit" value="Keresés">
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