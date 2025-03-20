<?php

    require_once './DAO/UsuarioDAO.php';

    if(isset($_POST['btnAcessar'])){
        $emailUsuario = trim($_POST['emailUsuario']);
        $senha = trim($_POST['senha']);

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->ValidarLogin($emailUsuario, $senha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br>
                <br>
                <h2>Sistema de Controle Financeiro.</h2>
                <h5>(Faça seu Login de acesso aqui).</h5>
                <br>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os dados solicitados:</strong>
                    </div>
                    <div class="panel-body">
                        <?php include_once '_msg.php'; ?>
                        <br>
                        <form role="form" action="index.php" method="POST">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="emailUsuario" id="emailUsuario" value="<?= isset($emailUsuario) ? $emailUsuario : '' ?>">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>">
                            </div>
                            <button class="btn btn-primary" name="btnAcessar" onclick="return ValidarLogin();">Acessar</button>
                        </form>
                        <hr>
                        <span>Não possui uma Conta?</span> <a href="cadastro.php">Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>