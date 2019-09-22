<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\loginEntity;
use PDO;
use Model\Repository\loginRepository;

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

                var_dump($this->repositoryProvider->getRepository(loginRepository::class)->findLogin($request->post('name'),
                    $request->post('password')));
                die();

                $this->router->redirect('?_controller=main&_action=main');
                die();
            }
            $this->session->setFlash('Fail');
        }
        require View . 'login.php';
    }


}