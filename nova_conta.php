<?php

    // ======= SESSÃO DO USUÁRIO =======
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // =================================

    require_once './DAO/ContaDAO.php';

    if(isset($_POST['btnSalvar'])){
        $banco = trim($_POST['banco']);
        $agencia = trim($_POST['agencia']);
        $numero = trim($_POST['numero']);
        $saldo = trim($_POST['saldo']);

        $objDAO = new ContaDAO();
        $ret = $objDAO->CadastrarConta($banco, $agencia, $numero, $saldo);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cadastrar Contas Bancárias.</h2>
                        <h5>Aqui você pode CADASTRAR todas as suas Contas Bancárias.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr>
                <form action="nova_conta.php" method="post">
                    <div class="form-group">
                        <label>Digite o Nome do Banco:</label>
                        <input class="form-control" placeholder="Digite o Nome do Banco aqui..." name="banco" id="banco" value="<?= isset($banco) ? $banco : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite a Agência:</label>
                        <input type="number" class="form-control" placeholder="Digite a Agência aqui..." name="agencia" id="agencia" value="<?= isset($agencia) ? $agencia : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite o Número da Conta:</label>
                        <input type="number" class="form-control" placeholder="Digite o Número da Conta aqui..." name="numero" id="numero" value="<?= isset($numero) ? $numero : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite o Saldo (R$):</label>
                        <input class="form-control" placeholder="Digite o Saldo da Conta aqui..." name="saldo" id="saldo" value="<?= isset($saldo) ? $saldo : '' ?>">
                    </div>
                    <button class="btn btn-success" name="btnSalvar" onclick="return ValidarConta();">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>