<?php

    // Validação para capturar o retorno númerico das mensagens pela URL!
    if(isset($_GET['ret'])){
        $ret = $_GET['ret'];
    }

    if(isset($ret)){
        switch($ret){
            case 1:
                echo '<div class="alert alert-success">Ação realizada com SUCESSO!</div>';
                break;

            case 0:
                echo '<div class="alert alert-warning">Preencher os campos OBRIGATÓRIOS!</div>';
                break;

            case -1:
                echo '<div class="alert alert-danger">Houve uma FALHA na operação, tente novamente mais tarde!</div>';
                break;

            case -2:
                echo '<div class="alert alert-warning">A SENHA deve conter entre 6 e 8 caracteres!</div>';
                break;

            case -3:
                echo '<div class="alert alert-warning">As SENHAS devem ser iguais!</div>';
                break;

            case -4:
                echo '<div class="alert alert-warning">Esse item não pode ser excluído, pois está em uso!</div>';
                break;

            case -5:
                echo '<div class="alert alert-warning">Já existe um cadastro com este E-mail!</div>';
                break;

            case -6:
                echo '<div class="alert alert-warning">Cadastro inexistente. Nenhum Usuário foi encontrado!</div>';
                break;
        }
    }