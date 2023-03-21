<?php
include("../model/conexao.php");

$varAlunoCodigo = $_POST["alunoCodigo"];
$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["alunoSexo"];

mysqli_query($conexao, "UPDATE aluno SET nome='$varAlunoNome', cidade='$varAlunoCidade', sexo='$varAlunoSexo' WHERE codigo=$varAlunoCodigo");

header("location:../index.php");
?>