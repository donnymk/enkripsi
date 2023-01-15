<?php

/* pembuatan password */
$password = '1234';
$passwordb_bCryptHash = bCrypt($password,12);
/* 12 adalah cost bukan key, semakin tinggi nilainya maka
 semakin lama CPU menggenerate hash password yang lebih aman */


/* pengecekan password dari form login */
$password_dari_form_login = '1234'; /* diambil dari password yang dikirim lewat form login */
$password_dari_database = $passwordb_bCryptHash;;

if ($password_dari_database == crypt($password_dari_form_login ,$password_dari_database)){
 echo 'selamat datang, terima kasih sudah login! jangan sungkan-sungkan<br>';
 //echo $passwordb_bCryptHash;
}
else{
 echo 'password ANDA SALAHHH!!!';
}

function bCrypt($pass,$cost){
      $chars='./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

      // Build the beginning of the salt
      $salt=sprintf('$2a$%02d$',$cost);

      // Seed the random generator
      mt_srand();

      // Generate a random salt
      for($i=0;$i<22;$i++) $salt.=$chars[mt_rand(0,63)];

     // return the hash
    return crypt($pass,$salt);
}

?>