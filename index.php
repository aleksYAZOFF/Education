<?php

//Глава 2!
	$burger = 4.95;//x2
	$cocktail = 1.95;
	$drink = 0.85;
	$tax = 0.075;
	$tips = 0.16;
	$cost;
	$total;


	


	print('Стоимость бургера: '.$burger);//Позиции и цены в счете
	print(' Количество : 2<br>');
	print('Стоимость коктейля: '.$cocktail.'<br>');
	print('Стоимость колы: '.$drink.'<br>');



	$cost = ($burger * 2) + $cocktail + $drink;
	$total = $cost + ($cost * $tax) + ($cost * $tips); 

	printf('Стоимость заказа без надбавок: $%.2f<br>', $cost);//Общая стоимость без надбавок
	printf('Итоговая стоимость заказа: $%.2f<br><br>', $total);//Общая стоимость


	$first_name = 'Александр';
	$last_name = 'Язов';

	print("$first_name $last_name<br>");
	print('Длинна строки: ');
	print(strlen("$first_name $last_name"));
	print'<br><br>';
	 
	

	$sum = 1;
	$stepen = 2;

	while($sum<=5){
		print("Сумма: $sum<br>");
		$sum++;
	}

	print('Степень: '.$stepen.'<br>');
	print('Степень: '.($stepen**2).'<br>');
	print('Степень: '.($stepen**3).'<br>');
	print('Степень: '.($stepen**4).'<br>');
	print('Степень: '.($stepen**5).'<br><br>');


	//Глава 3!

	$graduses = -50;

	while($graduses <= 50){
		print("Градусов по фарингейту: $graduses --->");
		printf('Градусы по Цильсию: %.2f',(($graduses-32)*5)/9);
		print('<br>');
		$graduses++;
	}

	print '<br><br>';

	for ($gradus=-50; $gradus <= 50 ; $gradus++) { 
		print("Градусов по фарингейту: $gradus --->");
		printf('Градусы по Цильсию: %.2f',(($gradus-32)*5)/9);
		print('<br>');
	}
?>