<?php

$mysql = new mysqli("mariadb_host", "root", "123456", "custom_db");

if ($mysql->connect_errno) {
    echo "fallo al conectar ";
}

echo $mysql->host_info;