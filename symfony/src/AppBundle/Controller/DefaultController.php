<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extrasolar\Body;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\AcceptHeader;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Extrablog\WpPosts;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager('extrablog');
        $articles = $em->getRepository('AppBundle:WpPosts')->findLastPosts();
        $em = $this->getDoctrine()->getManager();
        $bodies = $em->getRepository('AppBundle:Body')->findLastBodies();

        return $this->render('default/index.html.twig', [
          'bodies' => $bodies,
          'articles' => $articles,
          'title' => 'Extrasolar'
        ]);
    }

    /**
     * @Route("/visu", name="visu")
     */
    public function visualisationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/visualisation.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/api", name="api")
     */
     public function apiAction(Request $request)
     {
       return $this->render('body/api.html.twig', [
         'title' => 'API'
       ]);
     }

    /**
     * @Route("/api", name="api_get_list_planete")
     * @Route("/api/{name}")
     * @Route("/api/{id}")
     * @Method({"GET", "POST"})
     */
     public function apiGetListPlaneteAction(Request $request)
     {

       $em = $this->getDoctrine()->getManager();

       //accept text/html and if is xhr request
       if ($request->isXmlHttpRequest()) {
          $planete_name = trim(strip_tags($request->query->get('name')));
          $planete_id = trim(strip_tags($request->query->get('id')));

          if(isset($planete_name) && !empty($planete_name)) {
            $planetes_result = $em->getRepository('AppBundle:Body')->getListPlaneteByName($planete_name);

            $serializer = $this->get('serializer');
            $planetes = $serializer->serialize($planetes_result, 'json');

            return new \Symfony\Component\HttpFoundation\Response($planetes);
          }
          else {

            $planete_result = $em->getRepository('AppBundle:Body')->getPlaneteById($planete_id);

            $serializer = $this->get('serializer');
            $planete = $serializer->serialize($planete_result, 'json');

            return new \Symfony\Component\HttpFoundation\Response($planete);
          }


       }
       return new Response("Erreur : ce n'est pas une requete ajax");
     }
}
