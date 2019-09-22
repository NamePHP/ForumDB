<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;

class defaultController extends Controller
{
    public function indexAction(Request $request){
        require View . 'login.php';
    }
}