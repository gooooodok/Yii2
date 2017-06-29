<h1>Класс С</h1>

<hr>

<h4><b><?=$cars[1]?></b> vs <b><?=$cars[2]?></b> vs <b><?=$cars[0]?></b></h4>

<hr>

<?php

foreach ($cars as $car) {
	echo $car . "<br>";
}

?>