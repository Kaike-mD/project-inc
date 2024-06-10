<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Vendas</title>
    <link rel="stylesheet" href="./css/formStyle.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>


<body>
    <div class="container">

        <div class="title-form text-center">
            <h2>CADASTRO DE VENDAS</h2>
        </div>
        <form id="formRegister" action="register.php" method="POST">
            <div class="form-container">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center ">
                            <h4>DADOS DO CLIENTE</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="nm_cli">Nome do Cliete: </label>
                            <input type="text" class="form-control" name="nm_cli" id="nome" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dc_cpf">CPF do Cliente: </label>
                            <input type="text" class="form-control" name="dc_cpf" id="CPFInput" maxlength="11" oninput="criaMascara('CPF')" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dc_tel">Telefone do Cliente: </label>
                            <input type="text" class="form-control" name="dc_tel" maxlength="11" oninput="criaMascara('Celular')" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="dc_email">E-mail do Cliente: </label>
                            <input type="email" class="form-control" name="dc_email" id="email" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="cd_muni">Código do município: </label>
                            <input type="nume" class="form-control" name="cd_muni" id="cod-muni" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dt_rgst">Data de Registro: </label> 
                            <input type="date" class="form-control" name="dt_rgst" id="data-rgst" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center ">
                            <h4>DADOS DO CONTRATO</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="vl_contrato">Valor do Contrato: </label>
                            <input type="text" class="form-control" name="vl_contrato" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dt_ass">Data da Assinatura: </label>
                            <input type="date" class="form-control" name="dt_ass" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dt_ini">Data de Início: </label>
                            <input type="date" class="form-control" name="dt_ini" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="dt_fim">Data de Fim: </label>
                            <input type="date" class="form-control" name="dt_fim" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="dc_status">Descrição do Status: </label>
                            <select name="dc_status" class="form-control" id="statusContrato">
                                <option value="" selected disabled>Situação do Contrato</option>
                                <option value="A">Ativo</option>
                                <option value="D">Destratado</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="dt_rgst_contrato">Data de Registro: </label>
                            <input type="date" class="form-control" name="dt_rgst_contrato" required>
                        </div>
                    </div>
                </div>



                <div class="form-group text-center" id="assc-cto-cli">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                            <h4>ASSOCIAÇÃO CONTRATO CLIENTE</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="cd_ass_ctt_cli" class="fs-6">Código de Associação de Contrato Cliente: </label>
                            <input type="text" class="form-control" name="cd_ass_ctt_cli">
                        </div>
                        <div class="col-lg-6">
                            <label for="cd_contrato">Código do Contrato: </label>
                            <input type="text" class="form-control" name="cd_contrato">
                        </div>
                        <div class="col-lg-6">
                            <label for="cd_cli">Código do Cliente: </label>
                            <input type="text" class="form-control" name="cd_cli">
                        </div>
                        <div class="col-lg-6">
                            <label for="dt_rgst_ass">Data de Registro: </label>
                            <input type="date" class="form-control" name="dt_rgst_ass">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="btn">
                            <button type="submit" class="button" id="registerClient">Cadastrar Venda</button>
                        </div>
                    </div>
                </div>

        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<script>
    function criaMascara(mascaraInput) {
        const maximoInput = document.getElementById(`${mascaraInput}Input`).maxLength;
        let valorInput = document.getElementById(`${mascaraInput}Input`).value;
        const mascaras = {
            CPF: valorInput.replace(/[^\d]/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4"),
            Celular: valorInput.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4})/, "($1) $2-$3"),
        };

        if (valorInput.length === maximoInput) {
            (document.getElementById(`${mascaraInput}Input`).value = mascaras[mascaraInput])
        }
    };
</script>


</html>