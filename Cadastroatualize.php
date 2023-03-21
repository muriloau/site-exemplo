<?php

php

include("conexao.php"); ?> <IDOCTYPE html>

<html lang="en"> <head>

a.php

<meta charset="UTF-8">

<meta http-equiv"X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale-1.0">

<title>Cadastro</title>
</head>

<body>

<?php
SvarIda- $_GET["id"];

Squery mysqli_query($conexao, "SELECT FROM alunos WHERE codigo - Svarida"); while(Sexibe mysqli_fetch_array($query)){ ?>


<form action-"atualizarAluno.php" method="post">

<input type

"hidden" "AlunoCodigo" value="<?php echo $exibe[0] 2

<label>Home</label>

<input type="text" now "Alunotione" value="<?php echo $exibe[1] ?>"><br>

<label>Cidade</label>

<input type="text" name="AlunoCidade" value="<?php echo Sexdbe[2] ?>"><br> <label>Sexo</label>

<?php SvarCheck (Sexibe[3] "Masculino") ? "<input type="radio" value-Masculino name-Alunasexo checked Masculino <input type="radio" echo $varCheck ?>











</form> <?php } ?> 32

<input type="submit" value="Atualizar">

</body>
</html>
