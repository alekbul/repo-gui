<?php 

	$result; // Переменая для результата
	
	if ($_POST['v1'] != '' && $_POST['v2'] != '' && $_POST['op'] != '') // Проверка что имеются все переменные
	{
		
		switch ($_POST['op']) // switch определит какое вычисление нужно сделать
		{
			
			case '+':
			    $result = $_POST['v1'] + $_POST['v2'];
				break;
			case '-':
			    $result = $_POST['v1'] - $_POST['v2'];
				break;
			case '*':
			    $result = $_POST['v1'] * $_POST['v2'];
				break;
			case '/';
			    if ($_POST['v2'] != 0) // проверка что нет деления на ноль
				{
					
					$result = $_POST['v1'] / $_POST['v2'];
				    break;
					
				} else {
					
					$result = 'Ошибка: на ноль делить нельзя'; // если есть делени на ноль вернется ошибка
					
				}
				break;
			    
		}
		
		
	} else 
	{
		$result = 'Ошибка: выражение не полное'; // если переменых не хватает вернется ошибка
	}

?>


<html lang="en">
<head>
  <meta charset="utf-8">
 
  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
 
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/style.css">
 
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
 
<body>

    <!-- форма для выражения -->
	
	<form method='post' action='/'>
	
	    <input type="text" name='v1'>
		
		<select name="op">
		  <option value="+">+</option>
		  <option value="-">-</option>
		  <option value="*">*</option>
		  <option value="/">/</option>
		</select>
		
		<input type="text" name='v2'>
		
		<input type='submit'>
		
	</form>
	
	<!-- вывод результата -->
	
	<p><?php echo ' = '.$result; ?><p> 

</body>
</html>