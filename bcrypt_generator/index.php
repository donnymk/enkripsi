<?php

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

if(isset($_POST['password'])){
	/* generate password yang dienkripsi */
	$password = $_POST['password'];
	$passwordb_bCryptHash = bCrypt($password,10);
	/* 12 adalah cost bukan key, semakin tinggi nilainya maka
	 semakin lama CPU menggenerate hash password yang lebih aman */

	echo 'Password yang dienkripsi: '.$passwordb_bCryptHash;	
	echo '<br><br><a href="index.php">Keluar</a>';
	
	exit();
}
?>
<html>
	<head>
		<title>Bcrypt Generator</title>
	</head>
	<body>
		<form method="post">
			Masukkan password:
			<input type="text" name="password">
			<button type="submit">Generate encrypted password</button>
		</form>
	</body>
</html>