<?php
  // 三項演算子
  $greeting = null;
  $message = $greeting === null ? 'Hello' : $greeting;
  echo $message;

  // null合体演算子
  $hello = null;
  $msg = $hello ?? 'Hello';
  echo $msg;
?>
