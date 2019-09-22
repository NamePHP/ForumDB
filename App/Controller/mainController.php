<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\mainEntity;

class mainController extends Controller
{
    public function mainAction(Request $request){
        $this->repositoryProvider->getRepository(mainEntity::class)->findAll();
        require View . 'main.php';
    }
}