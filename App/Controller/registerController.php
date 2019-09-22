<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;

class registerController extends Controller
{
    public function contactAction(Request $request){
        require View . 'register.php';
    }
}