<?php

if(!isset($_POST['submit'])) header("location:form.php");

$data=fopen("datfiles/data.dat",'r');
$prev=array();
$prev_voters=array();
$cur=array();
$cur_voters=array();

for($i=1;$i<=67;$i++){
	$prev[$i]=0;
	$prev_voters[$i]=0;
	$cur[$i]=0;
	$cur_voters[$i]=0;
}

for($i=1;$i<=67;$i++){
	if(feof($data)) break;
	fgets($data);
	$prev_voters[$i]=(int)fgets($data);
	$prev[$i]=(int)fgets($data);
}

for($x=1;$x<=67;$x++){
	$w=$_POST[$x];
	$cur[$x]=$w;
	if ($w != 0) $cur_voters[$x] = 1;
}

fclose($data);
$data=fopen("datfiles/data.dat",'w+');
	
for($j=1;$j<=67;$j++){
	$t = $prev_voters[$j] + $cur_voters[$j];
	$z = $prev[$j] + $cur[$j];
	echo(is_int($t)."&nbsp;".is_int($z)."<br/>");

	fwrite($data,$j."\n");
	fwrite($data,$t."\n");
	fwrite($data,$z."\n");
}
	
fclose($data);
session_start();
$usedids=fopen("datfiles/usedids.dat", 'a+');
fwrite($usedids,$_SESSION['roll']."\n");
fclose($usedids);
session_destroy();
header("location:loggedout.html");
?>