<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $send_to = "b1021120@fun.ac.jp";
  $subject = "FUN2021情報機器概論お問合せフォーム";
  $body = "From: {$_POST['name']}\nEmail: {$_POST['email']}\n{$_POST['content']}";
  $headers = [
    'Content-Type' => 'text/plain; charset=UTF-8',
    'Return-Path' => "{$_POST['email']}",
    'From' => "{$_POST['name']} <{$_POST['email']}>",
    'Sender' => "{$_POST['name']} <{$_POST['email']}>",
    'Reply-To' => "{$_POST['email']}",
  ];

  array_walk(
    $headers,
    function($_val, $_key) use (&$header_str) {
      $header_str .= printf( "%s: %s \r\n", trim( $_key ), trim( $_val ) );
    }
  );

  mb_send_mail($send_to, $subject, $body, $header_str);

  header('Location: ./b1021120.html');
?>
</body>
</html>
