<?php

include_once ('./model/request.php');
include_once ('./database/db_manager.php');

class ResourceController
{
		
 	private $METHODMAP = ['GET' => 'search' , 'POST' => 'create' , 'PUT' => 'update', 'DELETE' => 'remove' ];
	
	public function treat_request($request) {
		if($request->getMethod() == "POST" && $request->getOperation() == "login")
		{
			return $this->login($request);
		}//if($request->getOperation() == "getra"){
			// $this->getra($request);
		//}
		return $this->{$this->METHODMAP[$request->getMethod()]}($request);
	
	}
	public function login($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::bodyParams($request->getBody());
		$result = (new DBConnector())->query($query); 
                return $result->fetchAll(PDO::FETCH_ASSOC);
		
	}
	//private function getra($request) {
	//	$query = 'SELECT ra FROM user';
	//	$result = (new DBConnector())->query($query); 
	//	return $result->fetchAll(PDO::FETCH_ASSOC);
	//}	
	private function search($request) {
		$query = 'SELECT * FROM '.$request->getResource().' WHERE '.self::queryParams($request->getParameters());
		$result = (new DBConnector())->query($query); 
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	private function create($request) {
		$body = $request->getBody();
		$resource = $request->getResource();
		$query = 'INSERT INTO '.$resource.' ('.$this->getColumns($body).') VALUES ('.$this->getValues($body).')';
		return self::execution_query($query);
		 
	}
	
	private function update($request) {
                $body = $request->getBody();
                $resource = $request->getResource();
                $query = 'UPDATE '.$resource.' SET '. $this->getUpdateCriteria($body);
		return self::execution_query($query);
        }
	
	private function bodyParams($json) {
		$criteria = "";
                $array = json_decode($json, true);
                foreach($array as $key => $value) {
                                $criteria .= $key." = '".$value."' AND ";
                 
                }
                return substr($criteria, 0, -5);
	
		
	}
	private function execution_query($query) {
		$conn = (new DBConnector());
		$conn->query($query);
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
		
	private function queryParams($params) {
		$query = "";		
		foreach($params as $key => $value) {
			$query .= $key.' = '."'".$value."'".' AND ';	
		}
		$query = substr($query,0,-5);
		if ($query == null) {
			$query.=1;		
		} 
		return $query;
	}
	
		
}
