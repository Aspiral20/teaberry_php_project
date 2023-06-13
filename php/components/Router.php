<?php

class Router {
    //Array cu traseurile Router-ului
    private $routes;

    //Constructor care citim si tinem minte router
    public function __construct() {
        //Drumul catre routes.php
        $routesPath = ROOT.'/php/config/routes.php';
        //Atribuim massivul din fisierul routes in variabila $routes
        $this->routes = include($routesPath);
    }

    private function getURI() {
        //Returna sub-adresa paginii site-ului(doar ce e cu sur)
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    //Preia controlul de la FrontController
    public function run() {
//        print_r($this->routes);         //Afisarea metodului
//        echo nl2br("\nClass Router, method run");

        // 1) Primim string-ul cererii:
        $uri = $this->getURI();     //apelam metodul classei getURI()
//        echo $uri;  //Afisam subadresa web-paginii

        // 2) Verificam daca avem astfel de cerere in routes.php
        foreach ($this->routes as $uriPattern => $path) {
//            echo "<br>$uriPattern -> $path";  //Afisare

            // 3) Comparam $uriPattern si $uri
            if (preg_match("~$uriPattern~", $uri)) {// '~' se foloseste cand in string se gaseste slash-uri('/')
//                echo $path . ' +';

                $segments = explode('/',$path);
//                nl2br(print_r($segments));

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
//                print_r($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));
//                print_r($actionName);
//                echo "<br>Class: " . $controllerName;
//                echo "<br>Method: " . $actionName;

                // Conectare fisier Class-Controller
                $controllerFile = ROOT . '/php/controllers/' . $controllerName . '.php';

                // Verific daca exista Class-ul, il includem
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    echo 'Error file not exist!';
                }

                //Cream un obiect Class-Controller
                $controllerObject = new $controllerName;
                $result = $controllerObject -> $actionName();
                if ($result != null) {
                    break;
                }

            }

        }

    }


}