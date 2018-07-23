<?php 
$project_name = 'alexsyw';
include 'new_head.php';

$random = rand(1, 2);
if ($random == 1 ) {
	echo '<body bgcolor="#000000">'; 
	echo '<center><p><font color="#FFFFFF">Зачем мне вообще сайт? Помоги мне выбрать.</font></p></center>';
    }
elseif ($random == 2) {
	echo '<body bgcolor="#ffffff">'; 
	echo '<center><p><font color="#000000">Что дальше делать на сайте? Выбери в опросе!</font></p></center>';
    }
else {
   	echo '<body bgcolor="#000000">';
   	echo '<center><p><font color="#FFFFFF">Помоги сайту, пройди опрос.</font></p></center>';
   	}

echo '<div id="vk_poll"></div>';
echo '<script type="text/javascript"> VK.Widgets.Poll("vk_poll", {}, "299025988_5c3f513bbf0fa58edc"); </script>';
?>