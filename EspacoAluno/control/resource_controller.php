<?php

include_once ('../EspacoAluno/model/request.php');
include_once ('../EspacoAulno/database/db_manager.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}

	private function search($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		$result = (new DBConnector())->query($query);
		return $result->fetchAll();
		}
		
	private function queryParams($params) {
		if($params != null){		
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '."'".$value."'".' AND ';	
		}
		$query = substr($query,0,-5);
		return $query;
		}
		return 1;
	}
		
	
	
}




