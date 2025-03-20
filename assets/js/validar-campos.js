// Validação de Campos: Tela de Login (index).
function ValidarLogin(){
    if($("#emailUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#emailUsuario").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

// Validação de Campos: Tela de Cadastro.
function ValidarCadastro(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nome").focus();
        return false;
    }

    if($("#email").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#email").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if($("#repSenha").val().trim() == ''){
        alert("Preencha o campo obrigatório REPETIR SENHA!");
        $("#repSenha").focus();
        return false;
    }

    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().trim() != $("#repSenha").val().trim()){
        alert("As SENHAS devem ser iguais!");
        $("#repSenha").focus();
        return false;
    }
}

// Validação de Campos: Tela de Meus Dados.
function ValidarMeusDados(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME!");
        $("#nome").focus();
        return false;
    }

    if($("#email").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!");
        $("#email").focus();
        return false;
    }

    if($("#senha").val().trim() == ''){
        alert("Preencha o campo obrigatório SENHA!");
        $("#senha").focus();
        return false;
    }

    if($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8){
        alert("A SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha").focus();
        return false;
    }
}

// Validação de Campos: Tela de Cadastrar e Alterar/Excluir Categoria.
function ValidarCategoria(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME DA CATEGORIA!");
        $("#nome").focus();
        return false;
    }
}

// Validação de Campos: Tela de Cadastrar e Alterar/Excluir Empresa.
function ValidarEmpresa(){
    if($("#nome").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME DA EMPRESA!");
        $("#nome").focus();
        return false;
    }

    if($("#telefone").val().trim() == ''){
        alert("Preencha o campo obrigatório TELEFONE!");
        $("#telefone").focus();
        return false;
    }

    if($("#endereco").val().trim() == ''){
        alert("Preencha o campo obrigatório ENDEREÇO!");
        $("#endereco").focus();
        return false;
    }
}

// Validação de Campos: Tela de Cadastrar e Alterar/Excluir Conta.
function ValidarConta(){
    if($("#banco").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME DO BANCO!");
        $("#banco").focus();
        return false;
    }

    if($("#agencia").val().trim() == ''){
        alert("Preencha o campo obrigatório NÚMERO DA AGÊNCIA!");
        $("#agencia").focus();
        return false;
    }

    if($("#numero").val().trim() == ''){
        alert("Preencha o campo obrigatório NÚMERO DA CONTA!");
        $("#numero").focus();
        return false;
    }

    if($("#saldo").val().trim() == ''){
        alert("Preencha o campo obrigatório SALDO DA CONTA!");
        $("#saldo").focus();
        return false;
    }
}

// Validação de Campos: Tela de Realizar Movimento.
function ValidarRealizarMovimento(){
    if($("#tipo").val() == ''){
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipo").focus();
        return false;
    }

    if($("#data").val() == ''){
        alert("Selecione uma DATA!");
        $("#data").focus();
        return false;
    }

    if($("#valor").val().trim() == ''){
        alert("Preencha o campo obrigatório VALOR (R$)!");
        $("#valor").focus();
        return false;
    }

    if($("#categoria").val() == ''){
        alert("Selecione uma CATEGORIA FINANCEIRA!");
        $("#categoria").focus();
        return false;
    }

    if($("#empresa").val() == ''){
        alert("Selecione uma EMPRESA!");
        $("#empresa").focus();
        return false;
    }

    if($("#conta").val() == ''){
        alert("Selecione uma CONTA BANCÁRIA!");
        $("#conta").focus();
        return false;
    }
}

// Validação de Campos: Tela de Consultar Movimento.
function ValidarConsultarMovimento(){
    if($("#tipoMov").val() == ''){
        alert("Selecione um TIPO DE MOVIMENTO!");
        $("#tipoMov").focus();
        return false;
    }
    
    if($("#dtInicio").val() == ''){
        alert("Selecione uma DATA INICIAL!");
        $("#dtInicio").focus();
        return false;
    }

    if($("#dtFinal").val() == ''){
        alert("Selecione uma DATA FINAL!");
        $("#dtFinal").focus();
        return false;
    }
}