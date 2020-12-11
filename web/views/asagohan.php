<html lang="ja">
<head>
<meta charset="utf-8">
<title>おいしく朝ごはんを食べれる日数</title>
</head>
<h1>おいしく朝ごはんを食べれる日数</h1><br><br>
<body>
<?php if (isset($_GET['button'])): ?>
<?php
$Nenrei=int($_GET['toshi']);
$DanAveJumyo=81;
$JoAveJumyo=87;
<?php if ($_GET['seibetsu']=='otoko') {
	$seibetsu="男";
	$rimit=81-$Nenrei;
	
}else{
	$seibestu="女"
	$rimit=$Nenrei-87;

$answer=$rimit*365;

?>

朝ごはんをおいしく食べられる日数は<br>
<?php echo $answer+"日です！"; ?>
<?php else: ?>
<form action="#" method="get">
	<p>年齢を入力してください：<br>
	<input type="text" name="toshi" id="toshi"></p><br>
	<p>性別：<br>
	<label><input type="radio" name="seibetsu" value="otoko" id="seibetsu" >男性</label>
	<label><input type="radio" name="seibetsu" value="onna" id="seibetsu" >女性</label></p>
	<p><input type="submit" name="button" value="決定"><input type="reset" value="クリア"></p>
	
</form>
<?php endif; ?>
</body>
</html>
