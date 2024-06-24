<?php

namespace App\controllers;

defined("APPPATH") or die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \Core\Controller;

class Principal extends Controller
{

    private $_contenedor;

    function __construct()
    {
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header', $this->_contenedor->header());
        View::set('footer', $this->_contenedor->footer());
    }

    public function getUsuario()
    {
        return $this->__usuario;
    }

    public function index()
    {
        $extraHeader = <<<html
        <title>Principal MCM</title>
        <link rel="shortcut icon" href="/img/logo.png">
html;

        if ($this->__perfil == 'CALLC') {
            View::set('header', $this->_contenedor->header($extraHeader));
            View::render("principal_call_center");
        } else {
            View::set('header', $this->_contenedor->header($extraHeader));
            View::render("principal_all");
        }
    }
}
