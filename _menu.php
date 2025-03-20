<?php

    // ======= SESSÃO DO USUÁRIO =======
    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    // =================================

    if(isset($_GET['close']) && $_GET['close'] == 1){
        UtilDAO::Deslogar();
    }

?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive" />
            </li>
            <li>
                <a href="meus_dados.php"><i class="fa fa-user fa-2x"></i>Meus Dados</a>
            </li>
            <li>
                <a href="#" style="display: flex; align-items: center;"><i class="glyphicon glyphicon-tags fa-2x"></i>Categoria<span class="fa arrow" style="padding-left: 137px;"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_categoria.php">Cadastrar Categoria</a>
                    </li>
                    <li>
                        <a href="consultar_categoria.php">Consultar Categoria</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-building-o fa-2x"></i>Empresa<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_empresa.php">Cadastrar Empresa</a>
                    </li>
                    <li>
                        <a href="consultar_empresa.php">Consultar Empresa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bank fa-2x"></i>Conta<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_conta.php">Cadastrar Conta</a>
                    </li>
                    <li>
                        <a href="consultar_conta.php">Consultar Conta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bank fa-2x"></i>Movimento<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="realizar_movimento.php">Realizar Movimento</a>
                    </li>
                    <li>
                        <a href="consultar_movimento.php">Consultar Movimento</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="_menu.php?close=1" class="active-menu"><i class="fa fa-power-off fa-2x"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>