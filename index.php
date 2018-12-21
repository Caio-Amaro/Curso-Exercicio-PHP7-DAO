<?php

require_once ("config.php");
require_once ("class/Sql.php");



$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>