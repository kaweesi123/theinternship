<?php
$numberoftreesperdistrictpertype = array(

	'Wakiso' => array(

		'muvule tree' => 500,
		'Eucaliptus' => 80003,
		'Musizi' => 767363,
		'Musabu' => 8984,
	),

	'Kabale' => array(

		'Muvule tree' => 60,
		'Eucaliptus' => 803,
		'Musizi' => 7363,
		'Musabu' =>89,
	),


	'kabale' => array(

		'Muvule tree' => 90,
		'Eucaliptus'  => 803,
		'Musizi' => 7363,
		'masabu' => 29,
	),
);

foreach ($numberoftreesperdistrictpertype as $index => $value){
	echo "====" .$index. "======<br>";

	foreach ($value as $key => $trees){
		echo $key ."=" .$trees. "<br>";
	}

}

$sumofalldistricts=array(500,80003,767363,8984,60,803,7363,89,90,803,7363,29);
echo "-----sum(sumofalldistricts)------ = " .array_sum($sumofalldistricts)."------<br>" ;

setcookie("sumofalldistricts","873450",time()+3600);
if (isset($_COOKIE['sumofalldistricts'])) {
	echo $_COOKIE['sumofalldistricts'];
setcookie("sumofalldistricts","",time()-60);
}
else{
	echo "----------the cookie doesnot exist----" ."<br>";
}

$sumofmasabu_trees=array(8984,29,89);
echo "------sum(sumofmasabu_trees)----- = ".array_sum($sumofmasabu_trees)."---------<br>" ;

session_start();
$_SESSION['sumofmasabu_trees'] ="9102";
echo $_SESSION["sumofmasabu_trees"]. "<br>" ;

?>

<|DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title> The Internship</title>
	</head>
	<body>
		< form method="POST" action "master.php">
		<label>sumoftrees</label>
		<input type-"number" name- +>
		<a href="master.php"> Master page</a>
	</body>
	</html>
