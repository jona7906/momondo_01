<?php 

$cities = [
    ['city_name'=>'Cartagena', 'src'=>'img_cartagena.png', 'population'=>'3000000'],
    ['city_name'=>'Bogota', 'src'=>'img_bogota.png', 'population'=>'10000000'],
    ['city_name'=>'Medellin', 'src'=>'img_medellin.png', 'population'=>'2000000'],
    ['city_name'=>'Amsterdam', 'src'=>'img_amsterdam.png', 'population'=>'1200000000']
];
echo json_encode($cities);