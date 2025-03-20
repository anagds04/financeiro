<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class EmpresaDAO extends Conexao{
        public function CadastrarEmpresa($nomeEmpresa, $telefone, $endereco){
            if($nomeEmpresa == '' || $telefone == '' || $endereco == ''){
                return 0;
            }else{
                // return 1;

                $conexao = parent::retornarConexao();

                $comando_sql = 'INSERT INTO tb_empresa(nome_empresa, telefone_empresa, endereco_empresa, id_usuario) VALUES(?, ?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nomeEmpresa);
                $sql->bindValue(2, $telefone);
                $sql->bindValue(3, $endereco);
                $sql->bindValue(4, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarEmpresa(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'SELECT id_empresa, nome_empresa, telefone_empresa, endereco_empresa FROM tb_empresa WHERE id_usuario = ? ORDER BY nome_empresa ASC;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }

        public function DetalharEmpresa($idEmpresa){
            if($idEmpresa == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'SELECT id_empresa, nome_empresa, telefone_empresa, endereco_empresa 
                FROM tb_empresa WHERE id_empresa = ? AND id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $i = 1;

                $sql->bindValue($i++, $idEmpresa);
                $sql->bindValue($i++, UtilDAO::UsuarioLogado());

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                return $sql->fetchAll();
            }
        }

        public function AlterarEmpresa($nomeEmpresa, $telefone, $endereco, $idEmpresa){
            if($nomeEmpresa == '' || $telefone == '' || $endereco == '' || $idEmpresa == ''){
                return 0;
            }else{
                // return 1;

                $conexao = parent::retornarConexao();

                $comando_sql = 'UPDATE tb_empresa SET nome_empresa = ?, telefone_empresa = ?, endereco_empresa = ? WHERE id_empresa = ? AND id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $i = 1;

                $sql->bindValue($i++, $nomeEmpresa);
                $sql->bindValue($i++, $telefone);
                $sql->bindValue($i++, $endereco);
                $sql->bindValue($i++, $idEmpresa);
                $sql->bindValue($i++, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ExcluirEmpresa($idEmpresa){
            if($idEmpresa == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'DELETE FROM tb_empresa WHERE id_empresa = ? AND id_usuario = ?';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $idEmpresa);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -4;
                }
            }
        }
    }