<?php


// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

// echo "<pre>";
// print_r($_SESSION['data_filter']);
// echo "</pre>";

?>

<head>
    <link rel="shortcut icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/relatorio.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratos</title>
</head>

<body>
    <div class="container">
        <div class="container-filter  col-xs-12 col-md-12 col-lg-12">
            <div class="title-form text-center">
                <h6>Consulta de Contratos</h6>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="filter-body">
                    <div class="content text-center">
                        <form method="post" class="form-inline">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="dt_ini" class="">Data Início:</label>
                                        <input type="date" class="form-control" id="dt_ini" name="dt_ini" required>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="dt_fim" class="mr-sm-2">Data Fim:</label>
                                        <input type="date" class="form-control" id="dt_fim" name="dt_fim" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="button" id="gerarRelatorio">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="table">
            <div class="col-xs-12 pd-0" id="tableDiv"></div>
        </div>

    </div>

</body>


<script>

    $("#gerarRelatorio").click(function(e){
        e.preventDefault();
        
        var dataIni = $("#dt_ini").val();
        var dataFim = $("#dt_fim").val();

        $.ajax({
            type: 'POST',
            url: 'ajax_dataFilter.php',
            data: {
                "dataInicio": dataIni,
                "dataFim": dataFim
            },

            cache: false,

            success: function(data){
                $("#tableDiv").html(data);
            }
        })

    })

</script>