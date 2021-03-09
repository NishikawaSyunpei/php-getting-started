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
$month=date("m");
$day=date("d");
$Mlist=array("0","31","28","31","30","31","30","31","31","30","31","30","31");
$nissu=0;
$uru=0;
$cnt=0;
/*
while($cnt<$month){
	$nissu=$nissu+$Mlist[$cnt];
	$cnt=$cnt+1;
}
$nissu=$nissu+$day;
*/
	
if (isset($_POST['button'])):{
	$Nenrei=$_POST['toshi'];
	
	if ($_POST['seibetsu']=='otoko'&& $Nenrei<79) {
		$rimit=79-$Nenrei;
		if(isset($_POST['urudoshi'])){
			while($cnt<=$rimit){
				if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
   					$uru=$uru+1;
 				}
				$year=$year+1;
				$cnt=$cnt+1;
			}
		}
		$answer=$rimit*365+$uru;
		echo 'あなたが、残りの人生で、おいしく朝食を食べられる回数は';
?><br><?php
		echo $answer,'日です'; 
		
	}else if($_POST['seibetsu']=='onna'&& $Nenrei<86){
		$rimit=86-$Nenrei;
		if(isset($_POST['urudoshi'])){
			while($cnt<=$rimit){
				if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
   					$uru=$uru+1;
 				}
				$year=$year+1;
				$cnt=$cnt+1;
			}
		}
		$answer=$rimit*365;
		echo 'あなたが、残りの人生で、おいしく朝食を食べられる回数は';
?><br><?php
		echo $answer,'日です'; 
	}else{
		echo 'あなたが、残りの人生で、おいしく朝食を食べられる回数は'
?><br><?php
		echo '今日で最後かもしれません';
	}
}
?>
	<br><br><br><br><a href="">おいしく昼食を食べられる回数へ</a><br>
	<a href="">おいしく夕食を食べられる回数へ</a>
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
