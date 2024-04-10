<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="kepek/logo.avif">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/reg.css">
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
    <h1 id="felirat" >Regisztáció</h1>
    <div id="regisztracio">
        <form action="register.php">
            <label for="email">Email cím</label>
            <input type="text" id="email" name="email" placeholder="Írja be az email címét..." required>

            <label for="jelszo">Jelszó</label>
            <input type="text" id="jelszo" name="jelszo" placeholder="Írja be a jelszavát..." required>

            <label for="jelszo">Jelszó megerősítése</label>
            <input type="text" id="jelszoMegerosites" name="jelszoMegerosites" placeholder="Írja be a jelszavát megint..." required>

            <label for="vezeteknev">Vezetéknév</label>
            <input type="text" id="vezeteknev" name="vezeteknev" placeholder="Írja be a vezetéknevét..." required>

            <label for="keresztnev">Keresztnév</label>
            <input type="text" id="keresztnev" name="keresztnev" placeholder="Írja be a keresztnevét..." required>

            <label for="nem">Nem</label>
            <br>

            <select id="nem">
                <option value="">Válassza ki a nemét!</option>
                <option value="ferfi">Férfi</option>
                <option value="no">Nő</option>
            </select>
            <br>
            <label for="iranyitoszam">Irányítószám</label>
            <input type="text" id="iranyitoszam" name="iranyitoszam" placeholder="Írja be az irányítószámát..." required>

            <label for="utca">Közterület neve</label>
            <input type="text" id="utca" name="utca" placeholder="Írja be az utcája nevét..." required>

            <label for="hazszam">Házszám</label>
            <input type="text" id="hazszam" name="hazszam" placeholder="Írja be a házszámát..." required>

            <input type="checkbox" id="felhasznalasiFeltetlek" required> <label for="felhasznalasiFeltetlek">Elfogadom a <a
                href="">felhasználási feltételeket</a>
        </label>
            <br>
            <input  type="submit" value="Regisztráció">
            <br>

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