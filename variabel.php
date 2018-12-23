<html>
<head>
<title>Tuny</title>
</head>
<body>
	<form method="POST">
	<h1>Mencari Nilai Terbesar:</h1>
	<br>
	<br>
	<br>
	
	<table>

		<tr>
		<td>Variable a :</td>
		<td><input type="text" name="a" id="a"></td>
		</tr>

		<tr>
		<td>Variable b :</td>	
		<td><input type="text" name="b" id="b"></td>
		</tr>

		<tr>
		<td>Variable c :</td>	
		<td><input type="text" name="c" id="c"></td>
		</tr>

		<td></td><td><button>Nilai Terbesar</button><button>Batal</button></td>

	</table>
 	</form>
</body>
</html>

	<?php

		 $a = $_POST ['a'];
		 $b = $_POST ['b'];
		 $c = $_POST ['c'];	

		

	echo	"
		<tr>
			<td>Variable a = $a</td>		
		</tr>
			<br>
		<tr>
			<td>Variable b = $b</td>	
		</tr>
			<br>
		<tr>
			<td>Variable c = $c </td>	
		</tr>
			<br>
		<tr>
			<td>Variable dengan Nilai Terbesar = </td>	

		</tr>

		";
	echo max ($a,$b,$c);		

	?>






