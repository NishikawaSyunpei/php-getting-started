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