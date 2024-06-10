<?php

require_once "conection.php";

function getClient()
{

    global $pdo;

    $sql = "SELECT 
               *
            FROM 
                cliente";

    $rs = $pdo->query($sql);
    $returnArray = array();
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        $returnArray[] =  $row;
    }
    return $returnArray;
}

function getContratos()
{

    global $pdo;

    $sql = "SELECT 
               *
            FROM 
                contratos";

    $rs = $pdo->query($sql);
    $returnArray = array();
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        $returnArray[] =  $row;
    }
    return $returnArray;
}

function getFilterData($dt_ini, $dt_fim)
{

    global $pdo;

    $returnArray = [];


    $sql = "SELECT * FROM contrato";
    
    if ($dt_ini && $dt_fim) {
        $sql .= " WHERE DT_INI >= '$dt_ini' AND DT_FIM <= '$dt_fim'";
    }

    $rs = $pdo->query($sql);
    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        $returnArray[] =  $row;
    }

    return $returnArray;
}
