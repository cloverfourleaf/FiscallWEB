<?php require_once('../../../../verificaS.php'); $nomeUsuario= $_SESSION['nomeUsuario'];             
$nome = explode(" ",$nomeUsuario);             
$nomeUsuario = $nome[0]; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        
        <title>Fiscall</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon"  href="../../../img/icone.png" type="image/x-png/"> 
        <link href="../../../bootstrap/css/bootstrap.min.css" rel = "stylesheet">
        <link rel="stylesheet" href="../../../css/Smith.css">
    </head>
    
    <body>
        <script src = '../../../bootstrap/js/alert.js'></script>
        <script src="../../../bootstrap/js/jquery.min.js"></script>
        <script src="../../../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../../bootstrap/js/jquery.mask.js"></script>

        <div id="main" class="container-fluid">
            <h3 class="page-header">Cadastrar Linha</h3>
        
            <form method="post" id="cadastrar">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Nome:</label>
                        <input type="text" class="form-control" id="nomeLinha" name="nomeLinha" placeholder="Ex.: Guarulhos (Jardim Paulista)" maxlength="100">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="campo2">Tarifa:</label>
                        <input type="text" class="form-control" id="valorTarifa" name="valorTarifa" placeholder="4,50">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo2">N° da Linha:</label>
                        <input type="text" class="form-control" id="numLinha" name="numLinha" placeholder="Ex.: 249" maxlength="8">
                    </div>
                </div>
                
                <div class="row">
                   <div class="form-group col-md-5">
                        <label for="campo1">Ponto Inicial:</label>
                        <input type="text" class="form-control" id="ida" name="ida" placeholder="Ex.: São Paulo (Metrô Penha)" maxlength="40">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo2">Horário de Início:</label>
                        <input type="time" class="form-control" id="horaFuncionamento" name="horaFuncionamento" placeholder="00:00:00" data-mask="00:00:00">
                    </div>
                    <script>
                        $(document).ready(function () { 
                            var $horaFuncionamento = $("#horaFuncionamento");
                            $horaFuncionamento.mask('00:00:00', {reverse: false});
                        });
                    </script>
                </div>
                <div class="row">    
                    <div class="form-group col-md-5">
                        <label for="campo2">Ponto Final:</label>
                        <input type="text" class="form-control" id="volta" name="volta" placeholder="Ex.: Guarulhos (Jardim Paulista) " maxlength="40">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="campo2">Horário de Término:</label>
                        <input type="time" class="form-control" id="horaTermino" name="horaTermino" placeholder="00:00:00">
                    </div>
                    <script>
                        $(document).ready(function () { 
                            var $horaTermino = $("#horaTermino");
                            $horaTermino.mask('00:00:00', {reverse: false});
                        });
                    </script>
                </div>
                <div class="row">
                </div>
                <hr />
                <div id="actions" class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="../Visualiza/visualizaLinha.php" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        
        <section class="Cima">    
            <div class="Bv">
                <div class="TxtInicio">
                    <a href="../../index.php" data-toggle="tooltip" data-placement="right" title="Tela inicial" > <h2>Olá, <?php echo $nomeUsuario;?></h2></a>
                </div>
                <div class="casa">
                    <a href="../../index.php" data-toggle="tooltip" data-placement="right" title="Tela inicial" > <img src="../../../img/CasaBranca.png" width="32px" height="32px"></a>
                </div>              
            </div>
                       
            <div class="divisaoPadrao">  
                <div class="txtPadrao">
                    <a href="../../Telas/Visualiza/visualizaPerfil.php" data-toggle="tooltip" data-placement="right" title="Alterar o seu perfil" ><h1>Perfil</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaPerfil.php"data-toggle="tooltip" data-placement="right" title="Alterar o seu perfil" ><img src="../../../img/usuario.png"></a>
                </div>              
            </div>
            
            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href="../../Telas/Visualiza/visualizaViagem.php" data-toggle="tooltip" data-placement="right" title="Consultar Viagens"><h1>Viagem</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaViagem.php" data-toggle="tooltip" data-placement="right" title="Consultar Viagens" ><img src="../../../img/Viagem.png"></a>
                </div>
            </div>

            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href="../../Telas/Visualiza/visualizaAlocacao.php" data-toggle="tooltip" data-placement="right" title="Consultar Alocações"><h1>Alocação</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaAlocacao.php" data-toggle="tooltip" data-placement="right" title="Consultar Alocações"><img src="../../../img/Locacao.png"></a>
                </div>
            </div>
            
            <div class="divisaoPadrao">  
                <div class="txtPadrao">
                    <a href= "../../Telas/Visualiza/visualizaLinha.php" data-toggle="tooltip" data-placement="right" title="Consultar Linhas"><h1>Linha</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href= "../../Telas/Visualiza/visualizaLinha.php" data-toggle="tooltip" data-placement="right" title="Consultar Linhas"><img src="../../../img/linha.png"></a>
                </div>
            </div>
            <div class="divisaoPadrao">  
                <div class="txtPadrao">
                 <a href="../../Telas/Visualiza/visualizaOnibus.php" data-toggle="tooltip" data-placement="right" title="Consultar Ônibus"> <h1>Ônibus</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaOnibus.php" data-toggle="tooltip" data-placement="right" title="Consultar Ônibus"><img src="../../../img/aaa.png"></a>
                </div>              
            </div>
            
            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href = "../../Telas/Visualiza/visualizaFabricante.php" data-toggle="tooltip" data-placement="right" title="Consultar Fabricantes"><h1>Fabricante</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href = "../../Telas/Visualiza/visualizaFabricante.php" data-toggle="tooltip" data-placement="right" title="Consultar Fabricantes"><img src="../../../img/fabricante.png"></a>
                </div>
            </div>
            
            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href = "../../Telas/Visualiza/visualizaModelo.php" data-toggle="tooltip" data-placement="right" title="Consultar Modelos"><h1>Modelo</h1></a>
                </div>'
                <div class="imgModelo">
                    <a href = "../../Telas/Visualiza/visualizaModelo.php" data-toggle="tooltip" data-placement="right" title="Consultar Modelos"> <img src="../../../img/modelo.png"> </a>
                </div>
            </div>
            
            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href="../../Telas/Visualiza/visualizaFuncionario.php" data-toggle="tooltip" data-placement="right" title="Consultar Funcionários"> <h1>Funcionário</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaFuncionario.php" data-toggle="tooltip" data-placement="right" title="Consultar Funcionários"> <img src="../../../img/Funcionario.png"></a>
                </div>  
            </div>
            
            <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href="../../Telas/Visualiza/visualizaCooperativa.php" data-toggle="tooltip" data-placement="right" title="Consultar Cooperativas"><h1>Cooperativa</h1></a>
                </div>
                <div class="imgPadrao">
                    <a href="../../Telas/Visualiza/visualizaCooperativa.php" data-toggle="tooltip" data-placement="right" title="Consultar Cooperativas"><img src="../../../img/cooperativa.png"></a>
                </div>
            </div>

            
            <div class="separador"> </div>
            
             <div class="divisaoPadrao">
                <div class="txtPadrao">
                    <a href = "../../../../sair.php" data-toggle="tooltip" data-placement="right" title="Sair do sistema"> <h1>Sair</h1> </a>
                </div>
                <div class="imgPadrao">
                    <a href = "../../../../sair.php" data-toggle="tooltip" data-placement="right" title="Sair do sistema"> <img src="../../../img/logouts.png"> </a>
                </div>  
            </div>
        </section>
    
    </body>
</html>

<div id="resultado"></div>
<!----------------Cadastrar---------------------->
<script> 
    $(document).ready(function() {
    $("form#cadastrar").submit(function() {
        event.preventDefault();
        var nomeLinha  = $("#nomeLinha").val();
        var valorTarifa  = $("#valorTarifa").val();
        var numLinha  = $("#numLinha").val();
        var ida  = $("#ida").val();
        var horaFuncionamento  = $("#horaFuncionamento").val();
        var volta  = $("#volta").val();
        var horaTermino  = $("#horaTermino").val();
        $.post('../../Function/Cadastrar/cadastrarLinha.php', {
            nomeLinha: nomeLinha,
            valorTarifa: valorTarifa,
            numLinha: numLinha,
            ida: ida,
            horaFuncionamento: horaFuncionamento,
            volta: volta,
            horaTermino: horaTermino
        },
        function(data){
            $("#resultado").html(data);                            
        });
    });
    });
</script>
