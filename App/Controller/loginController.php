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

                if($log = $this->repositoryProvider->getRepository(loginEntity::class)->findLogin($login->getName(),$login->getPassword())){
                    $this->session->setName($request->post('name'));
                    $this->session->setId((int)$log['id']);
                    $this->router->redirect('/main');

                }
                $this->session->setFlash('Incorrect login or password');
                return $this->render('login.php');

            }
            $this->session->setFlash('Enter all fields');
        }
        return $this->render('login.php');
    }


}