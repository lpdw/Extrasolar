<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Accept;
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
     * @Route("/api", name="api_planete")
     * @Route("/api/{name}")
     * @Route("/api/{id}")
     * @Route("/api/{id}/{props}")
     * @Method({"GET", "POST"})
     */
     public function apiGetListPlaneteAction(Request $request)
     {

       $em = $this->getDoctrine()->getManager();

      //  var_dump($request->server);

       //accept text/html and if is xhr request
       if ($request->isXmlHttpRequest()) {

          $planete_name = trim(strip_tags($request->query->get('name')));
          $get_planete_list = trim(strip_tags($request->query->get('get_planete_list')));
          $planete_id = trim(strip_tags($request->query->get('id')));
          $type_generated = trim(strip_tags($request->query->get('type')));
          $get_props = trim(strip_tags($request->query->get('get_props')));
          $props = $request->query->get('props');

          if(isset($planete_name) && !empty($planete_name) && isset($get_planete_list) && !empty($get_planete_list) && $get_planete_list == "true") { // if try to get only by name -> return list fof planetes
            $planetes_result = $em->getRepository('AppBundle:Body')->getListPlaneteByName($planete_name);

            $serializer = $this->get('serializer');
            $planetes = $serializer->serialize($planetes_result, 'json');

            return new \Symfony\Component\HttpFoundation\Response($planetes);

          }
          else if( isset($planete_name) && !empty($planete_name) && isset($props) && !empty($props) ) { // try to get data by name and props => return props values

            $planete = $em->getRepository('AppBundle:Body')->getValuesPlaneteByNameAndProps($planete_name, $props);

            if(isset($type_generated) && !empty($type_generated)) {
              if(strtolower($type_generated) == "html") {

                $number = mt_rand(0, 100);
                $html = $this->generateHtml($planete);
                return new Response($html);

              }
              else {
                // defaut generate JSON
                return new JsonResponse($planete);
              }
            }

            // defaut generate JSON
            return new JsonResponse($planete);

          }
          else if(isset($get_props) && !empty($get_props) && $get_props == "true" && isset($planete_id) && !empty($planete_id)) { // try to get

            $planete_props = $em->getClassMetadata('AppBundle:Body')->getFieldNames();
            $planete_name = $em->getRepository('AppBundle:Body')->getPlaneteById($planete_id);

            $serializer = $this->get('serializer');
            $planete_props = $serializer->serialize($planete_props, 'json');
            $planete_name = $serializer->serialize($planete_name, 'json');

            return new JsonResponse(array('props' => $planete_props, 'name' => $planete_name));
            // return new \Symfony\Component\HttpFoundation\Response(json_encode());
          }
       }
       return new Response("Erreur : ce n'est pas une requete xhr");
     }

     private function generateHtml($planete) {
       $html = "<table><tbody>";

       foreach ($planete[0] as $key => $value) {
        $html .= "<tr><td>".$key."</td><td>".$value."</td></tr>";
       }

       $html .= "</tbody></table>";
       return $html;
     }
}
