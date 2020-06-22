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
        Vardas: <input type="text" name="vardas" placeholder="Iveskite varda"> <br><br>
        El pastas: <input type="email" name='pastas' placeholder="Iveskeite el pasto adresa"><br><br>
        Slaptas: <input type="password" name='slaptas' placeholder="Iveskeite slaptazodis"><br><br>
        <button type="submit">Siusti duomenis</button>
    </form>
    
</body>
</html>