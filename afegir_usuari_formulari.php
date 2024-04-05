<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir Usuari LDAP</title>
</head>
<body>
    <div class="container">
        <h2>Afegir Usuari LDAP</h2>
        <form method="post" action="afegir_usuari.php">
            <label for="uid">Usuari (UID):</label><br>
            <input type="text" id="uid" name="uid" required><br>
            
            <label for="unorg">Unitat Organitzativa:</label><br>
            <input type="text" id="unorg" name="unorg" required><br>
            
            <label for="num_id">Número ID:</label><br>
            <input type="text" id="num_id" name="num_id" required><br>
            
            <label for="grup">Grup:</label><br>
            <input type="text" id="grup" name="grup" required><br>
            
            <label for="dir_pers">Directori Personal:</label><br>
            <input type="text" id="dir_pers" name="dir_pers" required><br>
            
            <label for="sh">Shell:</label><br>
            <input type="text" id="sh" name="sh" required><br>
            
            <label for="cn">Nom Complet:</label><br>
            <input type="text" id="cn" name="cn" required><br>
            
            <label for="sn">Cognom:</label><br>
            <input type="text" id="sn" name="sn" required><br>
            
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" required><br>
            
            <label for="mobil">Mòbil:</label><br>
            <input type="text" id="mobil" name="mobil" required><br>
            
            <label for="adressa">Adreça:</label><br>
            <input type="text" id="adressa" name="adressa" required><br>
            
            <label for="telefon">Telèfon:</label><br>
            <input type="text" id="telefon" name="telefon" required><br>
            
            <label for="titol">Títol:</label><br>
            <input type="text" id="titol" name="titol" required><br>
            
            <label for="descripcio">Descripció:</label><br>
            <textarea id="descripcio" name="descripcio" required></textarea><br><br>
            
            <input type="submit" value="Afegir Usuari" class="btn">
        </form>
        <a href="https://zends-vifemo/m08uf23/menu.php">Torna al menu</a>
    </div>
</body>
</html>
