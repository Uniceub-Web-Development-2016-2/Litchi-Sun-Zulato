<?php
class Request{
private $method;
private $protocol;
private $ip;
private $resource;
private $parameters;

public function __construct($method, $potocol, $ip, $resource, $parameters){
        $this->method = $method;
        $this->protocol = $protocol;
        $this->ip = $ip;
        $this->resource = $resource;
        $this->parameters = $parameters;
}

public function setMethod($vMethod){
       
$this->method = $vMethod;
}

public function getMethod(){
        return $this->method;
}

public function setProtocol($vProtocol){
        $this->protocol=$vProtocol;
}

public function getProtocol(){
        return $this->protocol;
}

public function setIp($vIp){
        $this->ip=$vIp;
}

public function getIp(){
        return $this->ip;
}

public function setResource($vResource){
        $this->resource=$vResouce;
}

public function getRsource(){
        return $this->resource;
}

public function setParameters($vParameters){
        $this->parameters=$vParameters;
}

public function getParameters(){
        return $this->parameters;
}

 public function toString(){
		$String = "";
		$Inc = 1;
		foreach($this->parameters as $var) {
			$String .= "P".$Inc."=".$var."&amp";
			$Inc++;
		}
	return $this->protocol.'://'.$this->ip.'/'.$this->resource.'?'.$String;
}

$request = new Request("get", "http", "google.com", "pesquisa", array("t1", "t2", "t3", "t4"));
echo $request->toString();



}

