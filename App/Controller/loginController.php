<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\loginEntity;


class loginController extends Controller
{
    public function logAction(Request $request)
    {
        $login = new loginEntity(
            $request->post('name'),
            $request->post('password')
        );

        if($request->isPost()){
            if($login->isValid()){

                if($this->repositoryProvider->getRepository(loginEntity::class)->findLogin($request->post('name'),
                    $request->post('password'))){
                    $this->router->redirect('?_controller=main&_action=main');
                    die();
                }

            }
            $this->session->setFlash('Fail');
        }
        require View . 'login.php';
    }


}