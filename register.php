<?php
require_once "conection.php";

//  DADOS CLIENTE
$nome = $_POST['nm_cli'];
$cpf = $_POST['dc_cpf'];
$telefone = $_POST['dc_tel'];
$email = $_POST['dc_email'];
$codMuni = $_POST['cd_muni'];
$dtRegistro = $_POST['dt_rgst'];

// DADOS CONTRATO 
$valorContrato = $_POST['vl_contrato'];
$dtAss = $_POST['dt_ass'];
$dtIni = $_POST['dt_ini'];
$dtFim = $_POST['dt_fim'];
$statusContrato = $_POST['dc_status'];
$dtRgst = $_POST['dt_rgst_contrato'];

// DADOS ASSOC_CTO_CLI
$codAssoc = $_POST['cd_ass_ctt_cli'];
$codCto = $_POST['cd_contrato'];
$codCli = $_POST['cd_cli'];
$dtRgstAss = $_POST['dt_rgst_ass'];


if(!empty($_POST)) {

    global $pdo;

    $query_cliente = "INSERT INTO cliente (NM_CLI, DC_CPF, DC_TEL, DC_EMAIL, CD_MUNI, DT_RGST)
                VALUES ('$nome', '$cpf', '$telefone', '$email', '$codMuni', '$dtRegistro')";

    $query_contrato = "INSERT INTO contrato (VL_CTO, DT_ASS, DT_INI, DT_FIM, DC_STATUS, DT_RGST)
                VALUES ('$valorContrato', '$dtAss', '$dtIni', '$dtFim', '$statusContrato', '$dtRgst')";

    $query_assc_cto_cli = "INSERT INTO assc_contrato_cliente (CD_CTO_CLI, CD_CTO, CD_CLI, DT_RGST)
                VALUES ('$codAssoc', '$codCto', '$codCli', '$dtRgstAss')";

    $pdo->exec($query_cliente);
    $pdo->exec($query_contrato );
    $pdo->exec($query_assc_cto_cli);

    if($pdo){
        header("Location: index.php?msgSuccess=Cadastro realizado com sucesso.");
    } else {
        header("Location: index.php?msgError=Algo deu errado!");
        die();
    };

}

?>