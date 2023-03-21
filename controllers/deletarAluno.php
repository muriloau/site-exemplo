<?php
include("../model/conexao.php");

$varIda = $_GET["ida"];

mysqli_query($conexao,"DELETE FROM aluno WHERE codigo = $varIda");

header("location:../index.php");

?>