<?php
       //conexao com o banco de dados
       try {
       $host = "mysql:dbname=dbcadastros;host=127.0.0.1"; //conexao
       $username = "root"; //usuario localhost
       $password = ""; //senha localhost
       
       $pdo = new PDO($host, $username, $password); 
       
    }catch(PDOException $e) {
          echo "ERRO: ".$e->getMessage();   
    }
?>