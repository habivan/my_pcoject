<?php 

class Router {
    
    protected $uri;
    protected $method;
    protected $router = [];

    public function __construct(){
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])["path"], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function match(){
        foreach($this->router as $rout){
            if($rout['uri'] === $this->uri and $this->method === $rout['method']){
                if(!isset($rout['middleware'])){
                    require_once CONTROLLER . "/{$rout['controller']}";
                    break;
                }else {
                    redirect('/');
                }
            }
            
        }
    }

    public function add($uri, $controller, $method){  
        $this->router[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];

        return $this;
    }

    public function only($middleware){
        // dump($this->router);
        $this->router[array_key_last($this->router)]['middleware'] = $middleware;
        return $this;
    }

    public function get($uri, $controller){
        return $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller){
        return $this->add($uri, $controller, 'POST');
    }
}