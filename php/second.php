<?php
if (!isset($_SESSION)) session:session_start();

if (!isset($_SESSION['db_is_logged_in'])) {
  session_destroy();
  header("Location: ../html/login.html");
  exit;
}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Aula1</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="../site.webmanifest">
  <link rel="apple-touch-icon" href="../icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/styles.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<!-- Add your site or application content here -->
<h2>HTML Forms</h2>

<form name="myForm" action="../php/action_page.php" onsubmit="return validateForm()" method="post">

  <label>Nome:
    <input type="text" name="nome">
  </label>
  <p>
    <label>Idade:
      <input type="number" name="idade">
    </label>
  <p>
    <label>Género:
      <input list="genero" name="genero">
    </label>
    <datalist id="genero">
      <option value="Masculino">
      <option value="Feminino">
    </datalist>
  <p>
  <div>Aluno ou docente:</div>
  <input type="radio" id="aluno" name="aluno_docente" value="Aluno">
  <label for="aluno">Aluno</label><br>
  <input type="radio" id="docente" name="aluno_docente" value="Docente">
  <label for="docente">Docente</label>
  <p>
    <input type="submit" value="Submit">
</form>

<script src="../js/vendor/modernizr-3.11.2.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>
</body>

</html>

