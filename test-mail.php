<?php
declare(strict_types=1);

mb_language('Japanese');
mb_internal_encoding('UTF-8');

function encodeHeader($value) {
  return mb_encode_mimeheader(
    mb_convert_encoding($value, 'ISO-2022-JP', 'UTF-8'),
    'ISO-2022-JP',
    'B'
  );
}

$from = 'ryuya4268@gmail.com';

$to = 'ryuya4268@gmail.com';

$subject = 'テストメール';

$body = <<< BODY
このメールはPHPから送信したものです。(1行目)
このメールはPHPから送信したものです。(2行目)
このメールはPHPから送信したものです。(3行目)
BODY;

$sender = encodeHeader('システム管理者');

$header = <<< HEADER
From: {$sender} <{$from}>
Reply-To: {$from}
HEADER;

$isMailSent = mb_send_mail($to, $subject, $body, $header);

echo $isMailSent ? 'メールを送信しました。' : 'メールは送信できませんでした。';
echo '<br>';
