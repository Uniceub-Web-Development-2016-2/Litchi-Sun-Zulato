<?php

include_once ('./model/request.php');
include_once ('./database/db_manager.php');

class ResourceController
{	
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
 	private $RESOURCEMAP = ['user'=>'treat_user'];
	const RESOURCES = array('user');
	private $USERMAP = ['GET' => 'search_user' , 'POST' => 'create_user' , 'PUT' => 'update_user', 'DELETE' => 'remove_user'];
	/*Validating request*/
	public function treat_request($request) {
		if($request->getMethod() == "POST" && $request->getOperation() == "login")
		{
			return $this->login($request);
		}
		return $this->{$this->RESOURCEMAP[$request->getResource()]}($request);
	}
	function treat_user($request)
	{
		return $this->{$this->USERMAP[$request->getMethod()]}($request);
	}
	public function validated($request)
	{
		$resource = $request->getResource();
		if(!in_array($resource, self::RESOURCES))
			return false;
		
		return true;
	}
	/*Generic funcitions*/
	public function login($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::bodyParams($request->getBody());
		$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
		
	}

	private function search($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		$result = (new DBConnector())->query($query); 		
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	private function create($request) {
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'INSERT INTO '.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';
		return $query;
		 
	}

	private function update($request) {
                $body = $request->getBody();
                $resource = $request->getResource();
                $query = 'UPDATE '.$resource.' SET '. $this->getUpdateCriteria($body);
		return $query;
        }
	
	private function getUpdateCriteria($json)
	{
		$criteria = "";
		$where = " WHERE ";
		$array = json_decode($json, true);
		foreach($array as $key => $value) {
			if($key != 'id')
				$criteria .= $key." = '".$value."',";
			
		}
		return substr($criteria, 0, -1).$where." id = ".$array['id'];
	}
	
	private function getColumns($json) 
	{
		$array = json_decode($json, true);
		$keys = array_keys($array);
		return implode(",", $keys);
	}
	
	private function getValues($json) 
        {
                $array = json_decode($json, true);
                $keys = array_values($array);
                $string =  implode("','", $keys);
		return "'".$string."'";
        }	
	private function bodyParams($json) {
		$criteria = "";
                $array = json_decode($json, true);
                foreach($array as $key => $value) {
                                $criteria .= $key." = '".$value."' AND ";
                 
                }
                return substr($criteria, 0, -5);
	
		
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
	/*User CRUD*/
	private function search_user($request)
	{
		$query = 'SELECT login FROM user WHERE '.self::queryParams($request->getParameters());
		$result = (new DBConnector())->query($query); 		
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
		private function create_user($request)
	{
		$values= json_decode($request->getBody(), true);		
		$query = "INSERT INTO user (login, password, type) VALUES ('".$values["login"]."', '".$values["password"]."', '".$values["type"]."');"
		$result = (new DBConnector())->query($query);
		return $result;
	}
	
}




