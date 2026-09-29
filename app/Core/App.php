<?php

// the front end controller !!


class App
{
   protected $controller = "HomeController";
   protected $action = "index";
   protected $params = [];

   public function __construct()
   {
      $this->url_prepare();
      $this->render();
   }


   // define the controller,method and the params    
   private function url_prepare()
   {

      $url = $_SERVER["QUERY_STRING"];
      if (!empty($url)) {

         $url = trim($url, "/");
         $url = explode("/", $url);

         //define the controller !!
         $this->controller = isset($url[0]) ? ucwords($url[0]) . "Controller" : "HomeController";

         //define the method !!
         $this->action = isset($url[1]) ? $url[1] : "index";

         //define the parameters !!  
         unset($url[0], $url[1]);
         $this->params = !empty($url) ? array_values($url) : [];
         // print_r($this -> params); 

      }
   }


   private function render()
   {
      if (class_exists($this->controller)) {

         $controller = new $this->controller;

         if (method_exists($controller, $this->action)) {

            call_user_func_array([$controller, $this->action], $this->params);

         } else {
            echo "this method not exists !!";
         }
      } else {
         echo "The controller : " . $this->controller . " not exists !! <br>";
      }
   }
}