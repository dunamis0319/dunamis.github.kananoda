mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to="prince.of.heaven1219@gmail.com";　//管理者のアドレス(送信先)

  $address = filter_input(INPUT_POST, "address", FILTER_VALIDATE_EMAIL);
  $name = filter_input(INPUT_POST, "name");
  $subject = filter_input(INPUT_POST, "subject");
  $msg = filter_input(INPUT_POST, "msg");
  $option = "From:".mb_encode_mimeheader($name).$address;

  if(mb_send_mail($to, $subject, $msg, $option)){
    echo "メールを送信しました。";
  }else {
    echo "メール送信に失敗しました。";
  }
