<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;
use Model\Entity\registerEntity;

class registerController extends Controller
{
    public function contactAction(Request $request)
    {
        $login = new registerEntity(
            $request->post('name'),
            $request->post('password')
        );

        if ($request->isPost()) {
            if ($login->isValid()) {

                $this->repositoryProvider->getRepository(registerEntity::class)->save($request->post('name'),
                    $request->post('password'));
                $this->router->redirect('?_controller=main&_action=main');
                die();

            }
            $this->session->setFlash('Fail');
        }
        require View . 'register.php';
    }
}