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
$time1 = new DateTime('2019-04-01');
$time2 = new DateTime('2018-02-05');

$diff = $time1->diff($time2);
echo $diff->format('%y年と%m月と%d日'), PHP_EOL;
echo $diff->format('総日数は%a日');

if (isset($_POST['button'])):{
	$Nenrei=$_POST['toshi'];
	
	if ($_POST['seibetsu']=='otoko'&& $Nenrei<81) {
		$rimit=79-$Nenrei;
		for($i=0; $i<$rimit)
		$answer=$rimit*365;
		echo "朝ごはんをおいしく食べられる日数は\n";
		echo $answer,"日です！";
		
	}else if($_POST['seibetsu']=='onna'&& $Nenrei<87){
		$rimit=86-$Nenrei;
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
	<p><input type="submit" name="button" value="計算する">	<input type="reset" value="クリア"></p>
	
</form>
<?php endif ;?>
</body>
</html>
