<?php 

	$filename = "counter.txt"; //Фаил счетчика
	$image = "img5.jpg"; //Фаил с картинкой
	$count;
	$content;
	
    $content = file_get_contents($image); // Получение данных из файла картинки
			
	$count = file_get_contents($filename); // открывается фаил счетчик 
		
    $count = $count++; //Увеличение счетчика
		
    file_put_contents($filename, ++$count); // Запись в фаил счетчика
		
    echo $content;

?>