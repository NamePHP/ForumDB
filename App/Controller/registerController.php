<?php


namespace Controller;


use Framework\Controller;
use Framework\Request;
use Model\Entity\registerEntity;

class registerController extends Controller
{
    public function contactAction(Request $request)
    {
        $loginReg = new registerEntity(
            $request->post('name'),
            $request->post('password')
        );

        if ($request->isPost()) {
            if ($loginReg->isValid()) {
                if ($this->repositoryProvider->getRepository(registerEntity::class)->findByName($loginReg->getName())) {
                    if ($loginReg->getPassword() >= 3 && 10 <= $loginReg->getPassword()) {
                        $this->repositoryProvider->getRepository(registerEntity::class)->save($loginReg->getName(),
                            $loginReg->getPassword());
                        $this->session->setName($loginReg->getName());
                        $register = $this->repositoryProvider->getRepository(registerEntity::class)->findById($loginReg->getName());
                        $this->session->setId($register['id']);
                        $this->router->redirect('?_controller=main&_action=main');
                        die();
                    }
                    $this->session->setFlash('Password length > 3 and < 10');
                    require View . 'register.php';
                    die();
                }
                $this->session->setFlash('Name is busy');
                require View . 'register.php';
                die();
            }
            $this->session->setFlash('Enter all fields');
        }
        require View . 'register.php';
    }
}