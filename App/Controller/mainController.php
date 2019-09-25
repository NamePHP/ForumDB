<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\mainEntity;

class mainController extends Controller
{
    public function mainAction(Request $request) :string
    {

        $main = $this->repositoryProvider->getRepository(mainEntity::class)->findAll();

        return $this->render('main.php',['main' => $main]);

    }

    public function addAction(Request $request)
    {
        $id = (int)$this->session->getId();
        $main = new mainEntity($id,$request->post('title'));

        if ($request->isPost()) {
            if ($main->isValid()) {
                $this->repositoryProvider->getRepository(mainEntity::class)->addTitle($main->getIdName(),$main->getTitle());
                $this->router->redirect('?_controller=main&_action=main');
                die();
            }
        }
    }
}

