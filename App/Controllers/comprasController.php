<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Compra;

class comprasController extends controle
{
	public function index(ServerRequestInterface $request, ResponseInterface $response)
	{
	    $compras = Compra::All();
	    $this->compras=$compras;
		return $this->view('compras/index',$response);
	}
	public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
	{
		return $this->view('compras/create',$response);
	}

	public function salvar(ServerRequestInterface $request, ResponseInterface $response)
	{
		$dados=$request->getParsedBody();
		$compra = new Compra;
		$compra->titulo=$dados['titulo'];
		$compra->desc=$dados['desc'];
		$idCompra=$compra->save();

		if ($idCompra) {
			echo "Sucesso";			
		}else
		{
			echo "falha";
		}

		return $response->withRedirect('/compras');
		
	}
}