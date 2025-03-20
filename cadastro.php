<?php

    require_once './DAO/UsuarioDAO.php';
    
    if(isset($_POST['btnCadastrar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->CriarCadastro($nome, $email, $senha, $repSenha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br>
                <br>
                <h2>Sistema de Controle Financeiro.<br>Cadastro de Conta.</h2>
                <h5>(Crie seu cadastro aqui).</h5>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os dados solicitados:</strong>
                    </div>
                    <div class="panel-body">
                        <?php include_once '_msg.php'; ?>
                        <br>
                        <form role="form" action="cadastro.php" method="POST">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome" value="<?= isset($nome) ? $nome : '' ?>">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= isset($email) ? $email : '' ?>">
                            </div>
                            <span class="msgSenha">A Senha deve conter entre 6 e 8 caracteres!</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite novamente sua Senha..." name="repSenha" id="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
                            </div>
                            <button class="btn btn-success" name="btnCadastrar" onclick="return ValidarCadastro();">Cadastrar</button>
                        </form>
                        <hr>
                        <span>Já possui uma Conta?</span> <a href="index.php">Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>