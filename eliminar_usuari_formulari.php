<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuari LDAP</title>
</head>
<body>
    <div class="container">
        <h2>Eliminar Usuari LDAP</h2>
        <form method="post" action="eliminar_usuari.php">
        	<input type="hidden" name="_method" value="DELETE">
        	
            <label for="uid">UID de l'Usuari a Eliminar:</label><br>
            <input type="text" id="uid" name="uid" required><br>
            
            <label for="unorg">Unitat Organitzativa:</label><br>
            <input type="text" id="unorg" name="unorg" required><br>
            
            <input type="submit" value="Eliminar Usuari" class="btn">
        </form>
        <a href="https://zends-vifemo/m08uf23/menu.php">Torna al menu</a>
    </div>
</body>
</html>
