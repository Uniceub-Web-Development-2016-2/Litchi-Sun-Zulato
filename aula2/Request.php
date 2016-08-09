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
        $string = 0;
 	foreach($this->parameters as $parameter){
        $string = $parameter."&";
}
	$url= $this->protocol."://".$this->ip."/".$this->resource."?"
        return $url.$string
       

}

$request = new Request();
echo $request->toString();



}

