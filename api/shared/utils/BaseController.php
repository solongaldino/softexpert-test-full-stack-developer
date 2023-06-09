<?php

namespace Shared\Utils;

class BaseController {

    private $body, $query, $params, $method;

    function __construct(){
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function getBody(){
        $this->body = file_get_contents("php://input", true);
        return json_decode($this->body, true);
    }

    public function getQuery(){
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $this->query = $queries;
        return $this->query;
    }

    public function getParams(){
        return $this->params;
    }

    public function getMethod(){
        return $this->method;
    }

    public function responseJson($data, Int $statusCode = 200){
        http_response_code($statusCode);
        if(is_array($data)){
            echo json_encode($data);
        }elseif(is_object($data)){
            echo json_encode($data);
        }elseif(!isset($data)){
            exit();
        }else{
            new ApiError(400, "Convert response error");
        }
        exit();
    }

}