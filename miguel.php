<?php

//carga y se conecta a la base de datos
require("conexion.php");

if (!empty($_POST)) {
    //obteneos los usuarios respecto a la usuario que llega por parametro
    $query = "SELECT concat(T.fk_lada,T.telefono) as telefono, P.contrasena
from personal P, telefonos T
where P.fk_telefono = T.id_telefono";

    
    $query_params = array(
        'telefono' => $_POST['telefono']
    );
    
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        //para testear pueden utilizar lo de abajo
        //die("la consulta murio " . $ex->getMessage());
        
        $response["success"] = 0;
        $response["message"] = "Problema con la base de datos, vuelve a intetarlo";
        die(json_encode($response));
        
    }
    
    //la variable a continuación nos permitirará determinar 
    //si es o no la información correcta
    //la inicializamos en "false"
    $validated_info = false;
    
