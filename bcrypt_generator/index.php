<?php

/* pembuatan password */
$password = 'unnes2018';
$passwordb_bCryptHash = bCrypt($password,10);
/* 12 adalah cost bukan key, semakin tinggi nilainya maka
 semakin lama CPU menggenerate hash password yang lebih aman */

echo $passwordb_bCryptHash;

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