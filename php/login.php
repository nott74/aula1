<?php
session_start();
include "DAL.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {
  $userId = $_POST["username"];
  $password = $_POST["password"];
  $dal = new DAL();
  $result = $dal->valUser($userId, $password);
  //$dal->debug($result);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['db_is_logged_in'] = true;
    header('Location: ../php/second.php');
    exit;
  } else {
    $errorMessage = 'Sorry, wrong user id/password';
    echo $errorMessage;
  }
}
?>
