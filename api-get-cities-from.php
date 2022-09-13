

<?php
try{
  $from_city = $_GET['from_city'] ?? 0;
  
  // Connect to the database
  $db = new PDO('sqlite:'.__DIR__.'/_momondo.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = $db->prepare('SELECT * FROM table_cities WHERE city_name LIKE :from_city');
  $q->bindValue(':from_city','%'.$from_city.'%');
  $q->execute();
  $flights = $q->fetchAll(PDO::FETCH_ASSOC);
 
  echo json_encode($flights);
}catch(Exception $ex){
   echo $ex;
  http_response_code(400);
  echo json_encode(['info'=>'upppsss...']);
}


/* 
$cities = [
    ['city_name'=>'Cartagena', 'src'=>'img_cartagena.png', 'population'=>'3000000'],
    ['city_name'=>'Bogota', 'src'=>'img_bogota.png', 'population'=>'10000000'],
    ['city_name'=>'Medellin', 'src'=>'img_medellin.png', 'population'=>'2000000'],
    ['city_name'=>'Amsterdam', 'src'=>'img_amsterdam.png', 'population'=>'1200000000']
];
echo json_encode($cities); */