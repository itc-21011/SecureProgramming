<?php
  session_start();
  if (empty($_SESSION['email'])) {
    $_SESSION['email'] = 'secret@example.jp';
  }

  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(array(
    'mail' => $_SESSION['mail']));
