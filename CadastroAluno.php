<?php
include("conexao.php");
$varAlunoNome = $_POST{"alunoNome"}
$VarAlunoCidade = $_POST{"alunoCidade"};

mysqli_query($conexao,"INSERT INTO aluno (nome,cidade"VALUES('$varAlunosnome','VarAlunoCidade'));
header("<locatio:cadastro.php");
?>