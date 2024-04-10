<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="icon" href="kepek/logo.avif">
</head>
<body>
<nav>
    <img src="kepek/logo.avif" id = "logo" alt=" ">
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
    <div id="adatok">
        <h1>Személyes adatok</h1>
        <table id="adatok2">
            <tr>
                <th>
                    Név:
                </th>
                <td>
                    Péter Gergely
                </td>
                <td><a class="fa fa-edit" style="font-size:140%;color:red;cursor: pointer"></a></td>
            </tr>
            <tr>
                <th>Lakcím:</th>
                <td>Szeged, Jókai utca 8/9</td>
                <td><a class="fa fa-edit" style="font-size:140%;color:red;cursor: pointer"></a></td>
            </tr>
        </table>
    </div>


    <div id="full">
        <h1 id="cim">Előző rendelés(ek)</h1>
        <div id="kosar">
            <table>
                <tr>
                    <th>Termék</th>
                    <th>Mennyiség</th>
                    <th>Dátum</th>
                    <th>Összeg</th>
                </tr>
                <tr>
                    <td><p>Pizza</p>
                    </td>
                    <td>2</td>
                    <td>
                        <p>2022.05.22</p>
                    </td>
                    <td>
                        1234ft
                    </td>
                </tr>
                <tr>
                    <td><p>Pizza</p>
                    </td>
                    <td>3</td>
                    <td>
                        <p>2022.05.23</p>
                    </td>
                    <td>
                        1234ft
                    </td>
                </tr>

            </table>

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