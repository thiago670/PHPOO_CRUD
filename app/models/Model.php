<?php

namespace App\Models;

use Config\Db;

class model
{
	static public function all()
	{
		$obj=new static;
		$conn=Db::conexao();
		$select="select * from ".$obj->table;
		$ret=$conn->query($select);
		$compras=$ret->fetchAll();
	    return $compras;

	}	
	static public function find(int $id)
	{
		$obj=new static;
		$conn=Db::conexao();
		$select="select * from ".$obj->table." where ".$obj->primary_key."=:id limit 1";
		$stmt=$conn->prepare($select);
		$stmt->bindValue(':id',$id);
		$stmt->execute();
		$objAux=$stmt->fetch(\PDO::FETCH_OBJ);

		foreach ($objAux as $key => $value) {
			$obj->{$key}=$value;
		}

	    return $obj;
	}
	public function save()
	{
		$atributos=get_object_vars($this);
		unset($atributos['table']);

		$col="(";
		$val="(";

		$isFirst=true;

		foreach ($atributos as $key => $value) {
			if ($isFirst)
			{
				$col.="`$key`";
				$val.=":$key";
				$isFirst=false;
			}
			else
			{
				$col.=",`$key`";
				$val.=",:$key";
			}
		}

		$col.=")";
		$val.=")";
		$insert="insert into ".$this->table." ".$col." values".$val;
		//var_dump($insert);exit;

		$conn=Db::conexao();
		$stmt=$conn->prepare($insert);

		$isFirst=true;
		$col="";
		$val="";

		foreach ($atributos as $key => $value)
		{
			$stmt->bindParam(':'.$key,$atributos[$key]);
		}

		$stmt->execute();
		return $conn->lastInsertId();

	}
}