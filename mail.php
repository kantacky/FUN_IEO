$to = "b1021120@fun.ac.jp";
$subject = "FUN2021情報機器概論お問合せフォーム";
$message = "From: " + $_POST['name'] + "\n" + "Email: " + $_POST['email'] + "\n" + $_POST['content'];
$headers = "From: " + $_POST['name'] + "(" + $_POST['email']; + ")";
mail($to, $subject, $message, $headers);