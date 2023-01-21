<?php
// Penjelasan fungsi password_hash
// referensi: https://masrud.com/password-hash-password-verify/

//PASSWORD_DEFAULT adalah algoritma bawaan untuk melakukan hash yaitu menggunakan BCRYPT dan akan menghasilkan output sepanjang 60 karakter. Sangat disarankan untuk membuat field data pada database sepanjang 255 karakter, sebab output hasil hash dapat lebih panjang sesuai dengan algoritma yang digunakan.
//
//$options hanya sebuah nama variabel array untuk menampung nilai cost. Nama variabel $options ini dapat kita ganti sesuka hati. Variabel $options ini tidak wajib.
//
//cost adalah parameter yang digunakan untuk menentukan seberapa banyak hash dilakukan. Untuk BCRYPT, jika nilainya 10 maka proses hashing dilakukan sebanyak 2^10 atau 1024 kali.

$options = [
    'cost' => 10,
];
echo password_hash('worker', PASSWORD_DEFAULT, $options);
