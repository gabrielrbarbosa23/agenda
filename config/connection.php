<?php

  $host = "";
  $dbname = "";
  $user = "";
  $pass = "";

  try {

    //$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  old

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    // Ativar o modo de erros
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
  }