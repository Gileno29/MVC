<?php
    namespace App;

    class Route{
        public function initRoutes(){
            $routes['home']= array(
                'route'=>'/',//caminho
                'controller'=>'indexController',//controlador responsavel
                'action'=>'index'//ação
            );
            $routes['Sobre_Nos']=array(
                'route'=>'/sobre_nos',
                'controller'=>'indexController',
                'action'=>'sobreNos'
            );
        }
        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
       
    }


?>