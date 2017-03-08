<?php
// src/AppBundle/Controller/SecurityController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class SecurityController extends Controller
{

    /**
      * @Route("/admin/", name="admin")
      * @Method("GET")
      */
    public function adminAction(Request $request){
      return $this->render('security/admin.html.twig', array(
        'title' => 'Administration'
      ));
    }
    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request)
    {
      $authenticationUtils = $this->get('security.authentication_utils');

     // get the login error if there is one
     $error = $authenticationUtils->getLastAuthenticationError();

     // last username entered by the user
     $lastUsername = $authenticationUtils->getLastUsername();

     return $this->render('security/login.html.twig', array(
         'last_username' => $lastUsername,
         'error'         => $error,
         'title'         => 'Connexion'
     ));
    }
}
