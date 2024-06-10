<?php

require_once "./functions.php";

$getFilter = getFilterData($_POST['dataInicio'], $_POST['dataFim']);

?>

<div class="container-list col-md-12" id="reportTable">
    <table class="table table-striped" id="data-table">
        <thead>
            <tr>

                <th scope="col">
                    <h6>VALOR CONTRATO</h6>
                </th>

                <th scope="col">
                    <h6>DATA DA ASSINATURA</h6>
                </th>

                <th scope="col">
                    <h6>DATA INÍCIO</h6>
                </th>

                <th scope="col">
                    <h6>DATA FIM</h6>
                </th>

                <th scope="col">
                    <h6>STATUS DO CONTRATO</h6>
                </th>

                <th scope="col">
                    <h6>DATA DE REGISTRO</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getFilter as $key => $value) { ?>
                <tr scope="row">
                    <td><?php echo $value['VL_CTO'] ?></td>
                    <td><?php echo $value['DT_ASS'] ?></td>
                    <td><?php echo $value['DT_INI'] ?></td>
                    <td><?php echo $value['DT_FIM'] ?></td>
                    <td><?php echo $value['DC_STATUS'] ?></td>
                    <td><?php echo $value['DT_RGST'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
