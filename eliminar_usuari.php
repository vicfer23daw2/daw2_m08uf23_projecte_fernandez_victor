<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['_method'] == "DELETE") {
    # Recoger los datos del formulario
    $uid = $_POST['uid'];
    $unorg = $_POST['unorg'];
    
    # Configuración de la conexión LDAP
    $opciones = [
        'host' => 'zend-vifemo.fjeclot.net',
        'username' => 'cn=admin,dc=fjeclot,dc=net',
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    
    # DN del usuario a eliminar
    $dn = 'uid=' . $uid . ',ou=' . $unorg . ',dc=fjeclot,dc=net';
    
    # Crear la conexión LDAP
    $ldap = new Ldap($opciones);
    $ldap->bind();
    
    # Intentar eliminar la entrada LDAP
    try {
        $ldap->delete($dn);
        echo "<b>Entrada eliminada</b><br>";
        echo '<a href="https://zends-vifemo/m08uf23/menu.php">Torna al menú</a>';
    } catch (Exception $e) {
        echo "<b>Error: " . $e->getMessage() . "</b><br>";
    }
}
?>
