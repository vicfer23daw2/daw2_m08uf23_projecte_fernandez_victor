<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors', 0);
if (isset($_GET['usr']) && isset($_GET['ou'])){
    $domini = 'dc=fjeclot,dc=net';
    $opcions = [
        'host' => 'zend-vifemo.fjeclot.net',
        'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $ldap->bind();
    $entrada = 'uid='.$_GET['usr'].',ou='.$_GET['ou'].',dc=fjeclot,dc=net';
    $usuari = $ldap->getEntry($entrada);
    echo "<div class='container'>";
    echo "<b><u>".$usuari["dn"]."</b></u><br>";
    foreach ($usuari as $atribut => $dada) {
        if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
    }
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP</title>
</head>
<body>
    <div class="container">
        <h2>Formulari de selecció d'usuari</h2>
        <form action="mostra_usuari.php" method="GET">
            Unitat organitzativa: <input type="text" name="ou"><br>
            Usuari (UID): <input type="text" name="usr"><br>
            <input type="submit" class="btn" value="Mostra Usuari"/>
            <input type="reset" class="btn" value="Neteja"/>
        </form>
        <a href="http://zend-vifemo.fjeclot.net/m08uf23/menu.php">Torna al menu</a>
    </div>
</body>
</html>

