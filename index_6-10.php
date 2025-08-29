<?php
require 'soal_7.php';


echo "--- No. 7 ---<br>";
$numbers = range(1, 20);


$filter = new NumberFilter();

$filter->filterAndCount($numbers);

?>