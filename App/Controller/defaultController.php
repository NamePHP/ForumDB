<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;

class defaultController extends Controller
{
    public function indexAction(Request $request){
        $this->session->remove('name');
        $this->session->remove('id');
        $this->router->redirect('/login');

    }
}