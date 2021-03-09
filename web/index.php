<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>おいしく朝ごはんを食べれる日数</title>
</head>
<h1>おいしく朝ごはんを食べれる日数</h1><br><br>
<body>
<?php
$year = date("Y");
	print_r($year);
if (isset($_POST['button'])):{
	$Nenrei=$_POST['toshi'];
	$DanAveJumyo=81;
	$JoAveJumyo=87;
	if ($_POST['seibetsu']=='otoko'&& $Nenrei<81) {
		$rimit=81-$Nenrei;
		$answer=$rimit*365;
		echo "朝ごはんをおいしく食べられる日数は\n";
		echo $answer,"日です！";
		
	}else if($_POST['seibetsu']=='onna'&& $Nenrei<87){
		$rimit=87-$Nenrei;
		$answer=$rimit*365;
		echo "朝ごはんをおいしく食べられる日数は\n";
		echo $answer,"日です！"; 
	}else{
		echo "朝ごはんをおいしく食べられる日数は今日で最後かもしれません";
	}
}
?>
<?php else: ?>
<form action="#" method="post">
	<p>年齢を入力してください：<br>
	<input type="text" name="toshi" id="toshi"></p><br>
	<p>性別：<br>
	<label><input type="radio" name="seibetsu" value="otoko" id="seibetsu" >男性</label>
	<label><input type="radio" name="seibetsu" value="onna" id="seibetsu" >女性</label></p>
	<p><input type="checkbox" name="urudoshi" value="urudoshi">うるう年を計算する</p>
	<p><input type="submit" name="button" value="決定">	<input type="reset" value="クリア"></p>
	
</form>
<?php endif ;?>
</body>
</html>
