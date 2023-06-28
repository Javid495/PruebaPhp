<?php
namespace Controllers; 
include_once '../../app.php';
use Models\Pais;
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $objCountry = new Pais();
    $objCountry->deleteData($_GET['id']);
} else {
    echo "La solicitud no se hizo utilizando el método GET";
}
?>