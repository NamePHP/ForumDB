<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;

class defaultController extends Controller
{
    public function indexAction(Request $request){
        header("Location: ?_controller=login&_action=log");

    }
}