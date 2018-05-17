<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage(){

    	$var = 'Homepage do sistema de gestão para grupos de investimento';
        $var2 = 'Ambiente de desenvolvimento';
    	return view('welcome', [
        'title' => $var,
        'titulo' => $var2
    	]);
    }

    public function cadastrar(){
    	echo "tela de cadastro de dados";
    }

    public function ajuda(){
        echo "Bem vindo ao assistente de ajuda!";
    }
    public function carrinho(){
        echo "Bem vindo ao Carrinho de compras!";
    }


    //Método de login de usuário

    public function fazerLogin(){
        return view('user.login');//user. estou falando para o Laravel que esta view se encontra na pasta user e o login é o nome do arquivo view
    }



}
