<?php 

// ==== Создание файла JSON ======== 
// $content = [
// 	[
// 	'firstName' => 'Иван',
// 	'lastName' => 'Иванов',
// 	'address' => [
// 					'city' => 'Москва',
// 					'street' => 'ул. Ленина',
// 					'bld' => '22'
// 				],
// 	'phoneNumber' => [
// 						'home' => '+7 495 123-4456',
// 						'cell' => '+7 916 383-3465'
// 					]
// 	],
// 	[
// 	'firstName' => 'Петр',
// 	'lastName' => 'Петров',
// 	'address' => [
// 					'city' => 'Санкт-Петербург',
// 					'street' => 'пр-т Московский',
// 					'bld' => '121'
// 				],
// 	'phoneNumber' => [
// 						'home' => '+7 812 456-1231',
// 						'cell' => '+7 926 356-3454'
// 					]
// 	],
// 	[
// 	'firstName' => 'Сергей',
// 	'lastName' => 'Сергеев',
// 	'address' => [
// 					'city' => 'Воронеж',
// 					'street' => 'ул. Лермонтова',
// 					'bld' => '14'
// 				],
// 	'phoneNumber' => [
// 						'home' => '+7 4732 824-1231',
// 						'cell' => '+7 910 353-3454'
// 					]
// 	],
// 	[
// 	'firstName' => 'Владимир',
// 	'lastName' => 'Смирнов',
// 	'address' => [
// 					'city' => 'Москва',
// 					'street' => 'ул. Новая Приновая',
// 					'bld' => '45'
// 				],
// 	'phoneNumber' => [
// 						'home' => '+7 495 848-0298"',
// 						'cell' => '+7 916 986-1212'
// 					]
// 	],
// 	[
// 	'firstName' => 'Наталья',
// 	'lastName' => 'Павлова',
// 	'address' => [
// 					'city' => 'Иваново',
// 					'street' => 'ул. Центральная',
// 					'bld' => '32'
// 				],
// 	'phoneNumber' => [
// 						'home' => '+7 4932 223-0936',
// 						'cell' => '+7 926 836-1298'		
// 					]
// 	]
// ];

// echo json_encode ($content, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// =============================================


$api = file_get_contents (__DIR__ . '/addressbook1.json');
$contacts = json_decode ($api, true);

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашнее задание к Занятию 2.1 Установка и настройка веб-сервера</title>
</head>
<body>
	<table>
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td></td>
			<td></td>
			<td>Телефон</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Город</td>
			<td>Улица</td>
			<td>Дом</td>
			<td>Домашний</td>
			<td>Мобильный</td>
		</tr>
	
		<?php  foreach ($contacts as $contact) : ?>
				<tr>
					<td><?php echo $contact['firstName'];?></td>
					<td><?php echo $contact['lastName'];?></td>
					<td><?php echo $contact['address']['city'];?></td>
					<td><?php echo $contact['address']['street'];?></td>
					<td><?php echo $contact['address']['bld'];?></td>
					<td><?php echo $contact['phoneNumber']['home'];?></td>
					<td><?php echo $contact['phoneNumber']['cell'];?></td>
				</tr>
		<?php endforeach; ?>
		
	</table>
	
</body>
</html>








