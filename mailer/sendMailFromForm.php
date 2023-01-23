<?php
	$data = json_decode(file_get_contents('php://input'), true);
	$nev = $data["cName"];
	$email = $data["cEmail"];
	$telefon = $data["cPhone"];
	$targy = $data["cSubject"];
	$uzenet = $data["cMessage"];



	$to      = 'lakasfelujitas.kecskemet@gmail.com';
	$subject = $targy;

	ob_start();
	include "mailToBoss.php";
	$message = ob_get_clean();

	$headers = 'From: system@xn--otthonszptk-ibb7cv6g.hu' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();

	mail($to, $subject, $message, $headers);


	$to      = $email;
	$subject = $targy;

	ob_start();
	include "mailToClient.php";
	$message = ob_get_clean();

	$headers = 'From: system@xn--otthonszptk-ibb7cv6g.hu' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();

	mail($to, $subject, $message, $headers);
?>