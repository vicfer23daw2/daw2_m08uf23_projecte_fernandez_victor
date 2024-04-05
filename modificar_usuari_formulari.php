<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificació d'Atributs d'Usuari LDAP</title>
</head>
<body>
    <div class="container">
        <h2>Modificació d'Atributs d'Usuari LDAP</h2>
        <form method="POST" action="modificar_usuari.php">
        	<input type="hidden" name="_method" value="PUT">
        
            <label for="uid">UID de l'Usuari:</label><br>
            <input type="text" id="uid" name="uid" required><br>
            
            <label for="unorg">Unitat Organitzativa:</label><br>
            <input type="text" id="unorg" name="unorg" required><br>
            
            <p>Selecciona l'atribut a modificar:</p>
            <div class="radio-group">
                <input type="radio" id="uidNumber" name="atribut" value="uidNumber" required>
                <label for="uidNumber">uidNumber</label><br>
                
                <input type="radio" id="gidNumber" name="atribut" value="gidNumber">
                <label for="gidNumber">gidNumber</label><br>
                
                <input type="radio" id="homeDirectory" name="atribut" value="homeDirectory">
                <label for="homeDirectory">Directori personal</label><br>
                
                <input type="radio" id="loginShell" name="atribut" value="loginShell">
                <label for="loginShell">Shell</label><br>
                
                <input type="radio" id="cn" name="atribut" value="cn">
                <label for="cn">cn</label><br>
                
                <input type="radio" id="sn" name="atribut" value="sn">
                <label for="sn">sn</label><br>
                
                <input type="radio" id="givenName" name="atribut" value="givenName">
                <label for="givenName">givenName</label><br>
                
                <input type="radio" id="postalAddress" name="atribut" value="postalAddress">
                <label for="postalAddress">PostalAdress</label><br>
                
                <input type="radio" id="mobile" name="atribut" value="mobile">
                <label for="mobile">mobile</label><br>
                
                <input type="radio" id="telephoneNumber" name="atribut" value="telephoneNumber">
                <label for="telephoneNumber">telephoneNumber</label><br>
                
                <input type="radio" id="title" name="atribut" value="title">
                <label for="title">title</label><br>
                
                <input type="radio" id="description" name="atribut" value="description">
                <label for="description">description</label><br>
            </div>
            <label for="nou_valor">Nou valor:</label><br>
            <input type="text" id="nou_valor" name="nou_valor" required><br>
            <br>
            <input type="submit" value="Modificar Atribut" class="btn">
        </form>
        <a href="https://zends-vifemo/m08uf23/menu.php">Torna al menu</a>
    </div>
</body>
</html>
