<?php
include("../model/conexao.php");

$varAlunoNome = $_POST["alunoNome"];
$varAlunoCidade = $_POST["alunoCidade"];
$varAlunoSexo = $_POST["alunoSexo"];

mysqli_query($conexao, "INSERT INTO aluno (nome, cidade, sexo) VALUES ('$varAlunoNome', '$varAlunoCidade', '$varAlunoSexo')");

header("location:../index.php");
?>