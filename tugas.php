<?php
	@$jarak = $_GET['jarak'];
	@$waktu = $_GET['waktu'];
	@$kecepatan = $jarak / $waktu;
?>

<!Doctype html>
<html>
	<head>
		<title> Rumus GLB </title>
	</head>
	<body>
		<form action="" method="GET">
			S (Jarak)=
			<input type="text" name="jarak" value="<?php echo $jarak; ?>"/>Km<br />
			t (waktu)= 
			<input type="text" name="waktu" value="<?php echo $waktu; ?>"/>jam<br/><br/>
			<input type="submit" name="submit" value="HITUNG"/><br/><br/>
			
			<?php
				echo "Rumus Kecepatan = jarak(S) / waktu(t)<br>";
				echo "V(Kecepatan) = $jarak / $waktu<br>";
				echo "V(Kecepatan) = ".$kecepatan." Km/jam";
			?>
		</form>
	</body>
</html>
