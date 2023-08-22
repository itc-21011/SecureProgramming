<?php
  $zip  = $GET['zip'];
  echo json_encode(array("message" => "郵便番号が見つかりません:" . $zip));
