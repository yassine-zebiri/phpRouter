<?php

class Router{
    public $routers=[];
    function __construct()
    {
    }
    public function Path($path,callable $route){
        $this->routers;
        $path=trim($path);
        $this->routers[$path]=$route;
        $this->routers[$path."/"]=$route;
    }
    public function run(){

        $uri=$_SERVER['REQUEST_URI'];
        if(strpos($uri,'?')) $uri=substr($uri,0,strpos($uri,'?'));
        $found=false;
        foreach($this->routers as $path => $route){
            if($path===$uri){
                $route(); 
                $found=true;
            };
        }
        if(!$found){
            $this->routers['*']();
        }
    }
}


$routers=new Router;

//// PATHS ///////////

$routers->Path('/',function(){
    require_once './pages/index.php';
});

$routers->Path('/about',function(){
    require_once './pages/about.php';
});
$routers->Path('/contact',function(){
    require_once './pages/contact.php';
});
$routers->Path('/user',function(){
    require_once './pages/user/user.php';
});
$routers->Path('/user/info',function(){
    require_once './pages/user/info.php';
});

///// error page  /////
$routers->Path('*',function(){
    require_once './pages/error.php';
});

///// run function
$routers->run();

?>
