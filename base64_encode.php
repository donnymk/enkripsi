<?php
echo "<h1>Encoding</h1>
Petani kode : ";
echo base64_encode('Petani kode');
echo "<h1>Decoding</h1>
UGV0YW5pIGtvZGU= : ";
echo base64_decode("UGV0YW5pIGtvZGU=");
?>