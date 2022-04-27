<?php
use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response\Cookies;
use Phalcon\Session\Manager;
use Phalcon\Session\Adapter\Stream;


class blogController extends Controller
{
    public function indexAction()
    {
     
        
        
}
public function collectionAction() {

}
public function shoesAction() {

}
public function racingbootsAction() {

}
public function contactAction() {

}
public function logoutAction() {
    $this->session =$this->container->get('session');
       
         unset($this->session);
         $this->session->destroy();
        //  $value = $this->cookies->get('email');
        //  $value1 = $this->cookies->get('password');
        // $rememberMeCookie = $this->cookies->get('email');
        // $rememberMe2Cookie = $this->cookies->get('password');


        // Delete the cookie
        if ($this->cookies->has('email')) {
          
            $this->cookies->get('email')->delete();
            $this->cookies->get('password')->delete();
            // $rememberMeCookie->delete();
            // $rememberMe2Cookie->delete();
        } else {
            // echo "no cookie found";
            // die();
        }
        // $rememberMeCookie->delete();
        // $rememberMe2Cookie->delete();

        
     
         $this->response->redirect('login/index');
        
 }

 public function addToCartAction() {

 }
}
?>