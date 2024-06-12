<?php
$serverName = "DESKTOP-O26JIGB\SQLEXPRESS";
try
{
    $db = new PDO("sqlsrv:server=$serverName ;
    Database=testDB", "", "");
    echo "Conectado com sucesso!";
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
    );
}
catch(Exception $e)
{
die(print_r($e->getMessage()));
}
?>