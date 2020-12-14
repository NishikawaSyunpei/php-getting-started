<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>おいしく朝ごはんを食べれる日数</title>
</head>
<h1>おいしく朝ごはんを食べれる日数</h1><br><br>
<body>
<?php 
if (isset($_GET['button'])):{
	$Nenrei=$_GET['toshi'];
	$DanAveJumyo=81;
	$JoAveJumyo=87;
	if ($_GET['seibetsu']=='otoko'&& $Nenrei<81) {
		$rimit=81-$Nenrei;
		$answer=$rimit*365;
		echo "朝ごはんをおいしく食べられる日数は\n";
		echo $answer,"日です！";
		
	}else if($_GET['seibetsu']=='onna'&& $Nenrei<87){
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
<form action="#" method="get">
	<p>年齢を入力してください：<br>
	<input type="text" name="toshi" id="toshi"></p><br>
	<p>性別：<br>
	<label><input type="radio" name="seibetsu" value="otoko" id="seibetsu" >男性</label>
	<label><input type="radio" name="seibetsu" value="onna" id="seibetsu" >女性</label></p>
	<p><input type="submit" name="button" value="決定"><input type="reset" value="クリア"></p>
	
</form>
<?php endif ;?>
</body>
</html>
