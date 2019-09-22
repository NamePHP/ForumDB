<?php


namespace Controller;

use Framework\Controller;
use Framework\Request;
use Model\Entity\loginModel;

class loginController extends Controller
{
    public function logAction(Request $request)
    {
        $login = new loginModel(
            $request->post('name'),
            $request->post('password')
        );

        if($request->isPost()){
            if($login->isValid()){


                $this->session->setFlash('Success');
                $this->router->redirect('Location : /');
                die();
            }
            $this->session->setFlash('Fail');
        }
        require View . 'login.php';
    }


}