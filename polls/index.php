<?php
$project_name = 'alexsyw polls';
include 'new_head.php';

$random = rand(1, 4);
echo '<div id="vk_poll"></div>';

if ($random == 1) {
	echo '<p>Автор: alexsyw</p>';
	echo '<script type="text/javascript"> VK.Widgets.Poll("vk_poll", {}, "299633400_9481e6985db785eb69"); </script>';
}
elseif ($random == 2) {
	echo '<p>Автор: l-lacker</p>';
	echo '<script type="text/javascript"> VK.Widgets.Poll("vk_poll", {}, "299633325_caf325eefe4cdfc5b7");</script>';
}
elseif ($random == 3) {
	echo '<p>Автор: fedorov</p>';
	echo '<script type="text/javascript"> VK.Widgets.Poll("vk_poll", {}, "299635173_5922b2bce07cfc0ff1"); </script>';
}
elseif ($random == 4) {
	echo "<p>Автор: w32u</p>";
	echo '<script type="text/javascript"> VK.Widgets.Poll("vk_poll", {}, "299739932_2931916453b8064c3b"); </script>';
}
else {
	echo '<p>Хотите попасть сюда? Отправляйте свой опрос: https://vk.com/wall-169213718_1</p>';
}

?>