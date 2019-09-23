<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\mainEntity;

class mainController extends Controller
{
    public function mainAction(Request $request) :string
    {

        /*$main = $this->repositoryProvider->getRepository(mainEntity::class)->findAll();*/
        $main =[1,2,3,4,4];
        var_dump($this->render('main.php',[$main]));
        die();

    }
}