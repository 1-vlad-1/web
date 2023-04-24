<?php
global $pdo;
try
{
    $pdo = new PDO('mysql:dbname=exposition;host=127.0.0.1','root','');
}
catch (PDOExeption $exeption)
{
    echo $exeption->getMessage();
    die;
}

$sql ="SELECT picture.id, picture.image, picture.title, picture.description, picture.year_of_creation, hall.name AS hallName
 FROM picture 
 JOIN hall ON hall.id = picture.id_hall";

$binds = [];

$stmt = $pdo->prepare($sql);
$stmt ->execute($binds);
$result = $stmt->fetchAll();



$filterClause = [];
$filterValue = [];
if (key_exists('saveFilter', $_GET)) {
    
    if ($_GET["input_title"]) {
        $filterClause[] = "picture.title = :title";
        $filterValue['title'] = $_GET['input_title'];
    }

    if ($_GET["name_hall"]) {
        $filterClause[] = "hall.name = :name";
        $filterValue['name'] = $_GET['name_hall'];
    }

     if ($_GET["description"]) {
        $filterClause[] = "picture.description = :description";
        $filterValue['description'] = $_GET['description'];
    }



    if (count($filterClause)) {
        $sql .= " WHERE " . implode(' AND ', $filterClause);
    }
}


$stmt = $pdo->prepare( $sql);
$stmt->execute($filterValue);
$result = $stmt->fetchAll();
$resultsCount = $stmt->rowCount();

if (key_exists('clearFilter', $_GET)){
    
}
