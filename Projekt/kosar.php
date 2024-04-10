<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="kepek/logo.avif">
    <title>Kosár</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/kosar.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div id="full">
    <h1 id="cim">Kosár</h1>
    <div id="kosar">
        <table>
            <tr>
                <th>Termék</th>
                <th>Ár</th>
                <th>Mennyiség</th>
                <th>Részösszeg</th>
            </tr>

            <tr>
                <td><ul>
                    <li><a href="#"><i class="fa fa-trash"></i></a></li>
                    <li><p>pizza</p></li>
                </ul>
                </td>
                <td>213ft</td>
                <td>
                    <input type="number">
                </td>
                <td>
                    1234ft
                </td>
            </tr>
            <tr>
                <td><ul>
                    <li><a href="#"><i class="fa fa-trash"></i></a></li>
                    <li><p>pizza</p></li>
                </ul>
                </td>
                <td>213ft</td>
                <td>
                    <input type="number">
                </td>
                <td>
                    1234ft
                </td>

            </tr>

        </table>

    </div>
        <div id="vegosszeg">
            <h3>Részösszeg:</h3>
            <hr>
            <table id="pizzak">
                <tr>
                    <th><p>pizza neve</p></th>
                    <td><p class="ar">0</p></td>

                </tr>
                <tr>
                    <th><p>pizza neve</p></th>
                    <td><p class="ar">0</p></td>

                </tr>
                <tr>
                    <th id="afa"><p>Áfa:</p></th>
                    <td class="ar">0</td>
                </tr>
            </table>
            <table id="szallitas">
                <tr>
                <th><p>Szállítás:</p></th>
                <td><p class="ar">0</p></td>
                </tr>
            </table>
            <table id="veg">
                <tr>
                    <th><p>Végösszeg:</p></th>
                    <td><h2 class="ar">0</h2></td>
                </tr>

            </table>



        </div>

        <button type="submit" class="btn btn-2 btn-sep icon-cart">Rendelés leadása</button>
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
    <br>
    <p>Pizzeria</p>
    <br>
    <p>Péter Gergely & Fekete Kristóf</p>
</footer>


</body>
</html>