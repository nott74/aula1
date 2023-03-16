<html lang="">
<body>
<?php
$hostname = "localhost";
$username = "admin";
$password = "admin";
try {
  $dbh = new PDO("mysql:host=$hostname;dbname=pessoas", $username, $password);
// echo "Ligado a BD";
  $count = $dbh->exec("INSERT INTO identificacao(nome, idade, genero, tipo) VALUES ('" . $_POST["nome"] . "'," . $_POST["idade"] . ",'" . $_POST["genero"] . "','" . $_POST["aluno_docente"] . "')");
  /*** número de rows alteradas ***/
//echo $count;
  /*** Fechar ligação a BD***/
  $dbh = null;
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>
<h1>Welcome <?php echo $_POST["nome"]; ?></h1><br>
Idade: <?php echo $_POST["idade"]; ?><br>
Genero:<?php echo $_POST["genero"]; ?><br>
Tipo:<?php echo $_POST["aluno_docente"]; ?><br>
</body>
</html>
