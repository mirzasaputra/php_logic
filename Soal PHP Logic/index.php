<!DOCTYPE html>
<html>
	<head>
		<title>SOAL PHP LOGIC</title>
	</head>
	<body>
		<form method="post">
			<label>Input text</label>
			<p style="margin:0;padding:0"><input type="text" name="input" value="<?php if(isset($_POST['input'])) echo $_POST['input'];?>" required></p>
			<i><small>Exp: Mirza Dwiyan 18 Banyuwangi</small></i>
			<br><br>
			<button type="submit">SUBMIT</button>
		</form>
	</body>
</html>

<?php

if(isset($_POST['input'])) :

	$pattern = "/([^0-9]+)/";

	$input = $_POST['input'];
	$umur = preg_replace($pattern, '', $input);
	
	if($umur > 0){
		$data = explode($umur, $input);

		$kota = explode(' ', $data[1]);
	} else {
		$data[0] = $input;
	}
	
?>

<br><br>
<table border="1pt" cellpadding="10">
	<tr>
		<th>NAMA</th>
		<th>UMUR</th>
		<th>KOTA</th>
	</tr>
	<tr>
		<td><?=$data[0];?></td>
		<td><?=$umur;?></td>
		<td><?=$kota[1];?></td>
	</tr>
</table>

<?php endif;?>