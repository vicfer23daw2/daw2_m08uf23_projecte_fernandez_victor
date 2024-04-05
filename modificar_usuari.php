<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
use Laminas\Ldap\Attribute;

ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['_method'] == "PUT") {
    # Recoger los datos del formulario
    $uid = $_POST['uid'];
    $unorg = $_POST['unorg'];
    $atribut = $_POST['atribut'];
    $nou_valor = $_POST['nou_valor'];
    
    # Configuración de la conexión LDAP
    $opciones = [
        'host' => 'zend-vifemo.fjeclot.net',
        'username' => 'cn=admin,dc=fjeclot,dc=net',
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    
    # DN del usuario a modificar
    $dn = 'uid=' . $uid . ',ou=' . $unorg . ',dc=fjeclot,dc=net';
    
    # Crear la conexión LDAP
    $ldap = new Ldap($opciones);
    $ldap->bind();
    
    # Obtener el valor actual del atributo
    $entrada_actual = $ldap->getEntry($dn);
    $valor_actual = $entrada_actual[$atribut][0];
    
    # Modificar el atributo
    $nova_entrada = [];
    Attribute::setAttribute($nova_entrada, $atribut, $nou_valor);
    $ldap->update($dn, $nova_entrada);
    
    echo "<b>Atribut '$atribut' de l'usuari '$uid' modificat:</b><br>";
    echo "Valor antic: $valor_actual<br>";
    echo "Nou valor: $nou_valor<br>";
    echo '<a href="https://zends-vifemo/m08uf23/modificar_usuari_formulari.php">Enrere</a>';
}
?>
