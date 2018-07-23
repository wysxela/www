<?php 
$project_name = 'alexsyw chat names';
include 'www/new_head.php';

$random = rand(1, 10);
if ($random == 1) {
	$title = 'клуб анонимных любителей alexsyw';
	echo $title;
}
elseif ($random == 2) {
	$title = 'клуб анонимных любителей монеточки';
	echo $title;
}
elseif ($random == 3) {
	$title = 'клуб анонимных людей в костюмах';
	echo $title;
}
elseif ($random == 4) {
	$title = 'не уютный чат alexsyw';
	echo $title;
}
elseif ($random == 5) {
	$title = 'клуб анонимных людей в худи в +30';
	echo $title;
}
elseif ($random == 6) {
	$title = 'уютный чат alexsyw';
	echo $title;
}
elseif ($random == 7) {
	$title = 'клуб анонимных алкольников';
	echo $title;
}
elseif ($random == 8) {
	$title = 'клуб анонимных любителей алексеев ';
	echo $title;
}
elseif ($random == 9) {
	$title = '/dev/null: название не найдено';
	echo $title;
}
elseif ($random == 10) {
	$title = 'забытое название';
	echo $title;
}
elseif ($random == 10) {
	$title = 'cat title.txt: Ой нет!';
	echo $title;
}

else {
	$title = 'я еще не придумал столько.';
	echo $title;
}
?>