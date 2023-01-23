<html>
<body>
<table style="padding-top: 25px; padding-bottom: 50px; color: #525457; width: 100%;">
	<tr>
		<td>
			<img src="https://xn--otthonszptk-ibb7cv6g.hu/img/icons/logo.png" style="width: 100%;">
			<hr class="divider" style="border: 0px; height: 1px; background-color: #929497; margin-top: 50px; margin-bottom: 25px;">
			<div style="font-size: 24px; margin-left: 25px; margin-right: 25px;">
				Azért kapta ezt az üzenetet, mert egy kedves ügyfél üzenetet írt önnek, a weboldalon elhelyezett űrlap segítségével!
			</div>
			<hr class="divider" style="border: 0px; height: 1px; background-color: #929497; margin-top: 25px; margin-bottom: 25px;">
		</td>
	</tr>
	<tr>
		<td style="padding-left: 25px; padding-right: 25px;">
			<div style="font-size: 22px; margin-bottom: 40px;">Ügyfél adatai:</div>

			<div class="cim" style="font-size: 20px; margin-top: 30px; margin-bottom: 5px;">Név:</div>
			<div class="adat" style="font-weight: bold;"><?php echo $nev; ?></div>

			<div class="cim" style="font-size: 20px; margin-top: 30px; margin-bottom: 5px;">Email:</div>
			<div class="adat" style="font-weight: bold;"><a href="mailto: <?php echo $email; ?>" style="text-decoration: none; color: deepskyblue;"><?php echo $email; ?></a></div>

			<div class="cim" style="font-size: 20px; margin-top: 30px; margin-bottom: 5px;">Telefon:</div>
			<div class="adat" style="font-weight: bold;"><a href="tel: <?php echo $telefon; ?>" style="text-decoration: none; color: deepskyblue;"><?php echo $telefon; ?></a></div>

			<div class="cim" style="font-size: 20px; margin-top: 30px; margin-bottom: 5px;">Tárgy:</div>
			<div class="adat" style="font-weight: bold;"><?php echo $targy; ?></div>

			<div class="cim" style="font-size: 20px; margin-top: 30px; margin-bottom: 5px;">Üzenet:</div>
			<div class="adat" style="font-weight: bold;"><?php echo $uzenet; ?></div>
		</td>
	</tr>
</table>
</body>
</html>