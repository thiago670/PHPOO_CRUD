<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class ComprasController
{


  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {
    $compras = [
      ["titulo"=>"Carvão","desc"=>"5kg"],
      ["titulo"=>"Arroz","desc"=>"1kg"],
      ["titulo"=>"Cerveja","desc"=>"Latão"]
    ];

    $this->compras = $compras;

    return $this->view('home',$response);
  }

  private function view($view,ResponseInterface $response)
  {
    $pagina = include '../app/views/'.$view.'.php';

    $response->getBody()->getContents($pagina);
    return $response;
  }
}