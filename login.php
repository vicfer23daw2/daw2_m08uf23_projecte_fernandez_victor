<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Autenticació, credencials amb permisos d'administrador LDAP</h1>
        <form action="http://zend-vifemo.fjeclot.net/m08uf23/auth.php" method="POST">
            <label for="adm">Usuari:</label>
            <input type="text" id="adm" name="adm"><br>
            <label for="cts">Contrasenya:</label>
            <input type="password" id="cts" name="cts"><br>
            <input type="submit" value="Envia" class="btn">
            <input type="reset" value="Neteja" class="btn">
        </form>  
        <a href="http://zend-vifemo.fjeclot.net/m08uf23/index.php">Torna a la pàgina inicial</a>      
    </div>
</body>
</html>
