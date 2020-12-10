<?php
$Nenrei=int($_POST['toshi']);
$DanAveJumyo=81;
$JoAveJumyo=87;
if($_POST['seibetsu']=='otoko'){
	$seibetsu="男";
	$rimit=81-$Nenrei;
	
}else{
	$seibestu="女"
	$rimit=$Nenrei-87;
}
$answer=$rimit*365;
?>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>おいしく朝ごはんを食べれる日数</title>
</head>
<h1>おいしく朝ごはんを食べれる日数</h1><br><br>
<body>朝ごはんをおいしく食べられる日数は<br>
<?php
	echo"$answer"
	?>
です！
</body>
</html>
