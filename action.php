<?php
include "options.php";
var_dump($_POST);

// if ($_POST) { 
	$name = htmlspecialchars($_POST["name"]); 
	$email = htmlspecialchars($_POST["email"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$message = htmlspecialchars($_POST["message"]);
	$flag = htmlspecialchars($_POST["flag"]);
	$json = array(); 
	if ($flag=='1') {
		if (!$name or !$email or !$phone) { 
			$json['error'] = 'Данные недошли'; 
			echo json_encode($json); 
			die(); 
		}
		if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) { 
			$json['error'] = 'Что с почтой?'; 
			echo json_encode($json); 
			die(); 
		}
		$add_row = $connection->exec("INSERT INTO `messages`(`name`,`email`,`phone`,`message`) 
											VALUES ('$name', '$email', '$phone', '$message')");

		if($add_row)
		{

		    echo "Пост успешно добавлена в базу";
			print "<HTML><HEAD>\n";
		    print "<META HTTP-EQUIV='Refresh' CONTENT='1; URL=index.php'>\n";
		    print "</HEAD></HTML>\n";
		}
		else echo "Ошибка,добавление не удалось";  
		// }
	}
?>