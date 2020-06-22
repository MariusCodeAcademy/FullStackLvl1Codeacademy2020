<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <p>» Sukurkite POST registracijos formą su
        pakartotiniu slaptažodžiu ir būtinais duomenimis.
        Registracijos duomenis išsiųskite į kitą
        registracija.php failą ir juos atvaizduokite.</p>


    <form action="registracija.php" method="post">
        Vartotojo vardas* <input type="text" name='username'><br><br>
        slaptazodis <input type="password" name='pass1'><br><br>
        pakartoti slaptazodi <input type="password" name='pass2'><br><br>
        <button>siusti</button>
    </form>
    
</body>
</html>