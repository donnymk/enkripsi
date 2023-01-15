<?php

function enc_pass($data){
  $string1=$data;
  $string2="p3176h@l@176".$data;
  $md5_string1=md5($string1);
  $md5_string2=md5($string2);
  $text1=substr($md5_string1, 0,4);
  $text2=substr($md5_string2, 0,4);
  $enc=base64_encode(base64_encode($text1.$data.$text2));
  return $enc;
}

function dec_pass($data){
  $dec1=base64_decode(base64_decode($data));
  $strlen=strlen($dec1);
  $strlenkey=$strlen-8;
  $pass=substr($dec1, 4,$strlenkey);
  return $pass;
}

echo enc_pass('Pa$$w0rdAdmin');
echo "<br><br>";
echo dec_pass('WWpOaU9GQmhKQ1IzTUhKa1FXUnRhVzQzTWpjMQ==');
?>