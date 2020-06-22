<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP formos test</title>
</head>
<body>
    <h1>formos</h1>

    <form action="process.php" method="get">
        Vardas: <input type="text" name="vardas" placeholder="Iveskite varda"> <br><br>
        El pastas: <input type="email" name='pastas' placeholder="Iveskeite el pasto adresa"><br><br>
        Slaptas: <input type="password" name='slaptas' placeholder="Iveskeite slaptazodis"><br><br>
        <button type="submit">Siusti duomenis</button>
    </form>

    <hr>
    <h2>Post</h2>

    <form action="process.php" method="post">
        Vardas:     <input type="text" name="vardas" placeholder="Iveskite varda"> <br><br>
        El pastas:  <input required type="email" name='pastas' placeholder="Iveskeite el pasto adresa"><br><br>
        Slaptas:    <input required minlength="4" type="password" name='slaptas' placeholder="Iveskeite slaptazodis"><br><br>
        <button type="submit">Siusti duomenis</button>
    </form>


    <!-- 
        » Sukurkite formą su GET metodu, kurioje būtų
        skaičiuojama dviejų skaičių daugyba.
        » Sukurkite POST registracijos formą su
        pakartotiniu slaptažodžiu ir būtinais duomenimis.
        Registracijos duomenis išsiųskite į kitą
        registracija.php failą ir juos atvaizduokite. -->

        <p>» Sukurkite formą su GET metodu, kurioje būtų
        skaičiuojama dviejų skaičių daugyba.</p>

    <form action="process.php">
        <input type="number" name="skaic1" id="" placeholder="iveskite prima skaiciu">
        <input type="number" name="skaic2" id="" placeholder="iveskite antra skaiciu"><br>
        <input type="text" name="pranesimas" id="" placeholder="pranesimas">
        <button type="submit"> skaiciuoti</button>
    </form>

    
    <!-- <script>alert('Laba diena');</script> -->
    
</body>
</html>