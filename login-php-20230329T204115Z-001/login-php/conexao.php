<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'isaroot');
define('SENHA', 'isabella0223');
define('DB', 'localhostisa');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');