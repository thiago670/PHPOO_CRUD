<?php

namespace Config;

class DB
{
	public static function conexao()
	{
		$conexao = new \PDO("mysql:host=localhost;dbname=phpoo;charset=utf8","root","root");
		return $conexao;

	}

}