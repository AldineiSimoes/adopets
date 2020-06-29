<?php
namespace src\handlers;

use \src\models\User;
use \src\models\Pessoa;
use \src\models\PessoaDado;
use \src\models\Pessoa_Endereco;
use src\models\Pessoa_telefone;

class CadastroHandler {

    public static function cadastro()
    {
        $user = User::select()->where('token',$_SESSION['token'])->one();
        $dados['cli'] = Pessoa::select()->where('ID',$user['ID_PESSOA'])->one();
        $dados['endereco'] = Pessoa_Endereco::select()->where('ID_PESSOA',$user['ID_PESSOA'])->one();
        $dados['dados'] = PessoaDado::select()->where('ID_PESSOA',$user['ID_PESSOA'])->one();

        if ($dados)
        {
            return $dados;
        }
        
        return false;
    }

    public function getName($name)
    {
        $dados = Pessoa::select()->where('NOME',$name)->one();
        return $dados;
    }

    public static function save(Pessoa $pessoa, PessoaDado $dado)
    {
        PessoaDado::update()
                ->set('token',$dado->token)
                ->set('pv',$dado->pv)
                ->where('id_pessoa',$pessoa->id)
        ->execute();
        return false;
    }

    public static function add($email)
    {
        Pessoa::insert(
            ['NOME' => $email]
        )->execute();
        $dados = Pessoa::select()->where('NOME',$email)->one();
        Pessoa_Endereco::insert(
            ['ID_PESSOA' => $dados['ID']]
        )->execute();
        Pessoa_telefone::insert(
            ['ID_PESSOA' => $dados['ID']]
        )->execute();
        PessoaDado::insert(
            ['ID_PESSOA' => $dados['ID']]
        )->execute();
        return $dados;
    }

}