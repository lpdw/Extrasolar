<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Extrablog\WpPosts;

class DefaultController extends Controller
{
   private $satellites = array();

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

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
     * @Route("/api/{name}")
     * @Route("/api/{id}")
     * @Route("/api/{id}/{props}")
     * @Method({"GET", "POST"})
     */
     public function apiGetListPlaneteAction(Request $request)
     {
       $em = $this->getDoctrine()->getManager();

       if ($request->isXmlHttpRequest()) { // sets HEADERS "X-Requested-With: XMLHttpRequest"

         if($request->getMethod() == "GET") {

           $planete_name = trim(strip_tags($request->query->get('name')));
           $get_planete_list = trim(strip_tags($request->query->get('get_planete_list')));
           $planete_id = trim(strip_tags($request->query->get('id')));
           $get_props = trim(strip_tags($request->query->get('get_props')));

           if(isset($planete_name)
              && !empty($planete_name)
              && isset($get_planete_list)
              && !empty($get_planete_list)
              && $get_planete_list == "true") { // if try to get only by name -> return list fof planetes
             $planetes_result = $em->getRepository('AppBundle:Body')->getListPlaneteByName($planete_name);

             $serializer = $this->get('serializer');
             $planetes = $serializer->serialize($planetes_result, 'json');

             return new \Symfony\Component\HttpFoundation\Response($planetes);

           }
           else if(isset($get_props) && !empty($get_props) && $get_props == "true" && isset($planete_id) && !empty($planete_id)) { // try to get all props by id

             $planete_props = $em->getClassMetadata('AppBundle:Body')->getFieldNames();
             $planete_name = $em->getRepository('AppBundle:Body')->getPlaneteById($planete_id);

             $output = array_merge(
              $planete_props,
              $em->getClassMetadata('AppBundle:Body')->getAssociationNames()
            );

             $serializer = $this->get('serializer');
             $planete_props = $serializer->serialize($planete_props, 'json');
             $planete_name = $serializer->serialize($planete_name, 'json');

             return new JsonResponse(array('props' => $output, 'name' => $planete_name));
             // return new \Symfony\Component\HttpFoundation\Response(json_encode());
           }

         }
         else if($request->getMethod() == "POST") { //get all props values from request

           $datas = $request->getContent();
           $params = json_decode($datas);
           $planete_name = $params->name;
           $props = $params->props;
           $data_type = $params->type;

           if( isset($planete_name) && !empty($planete_name) && isset($props) && !empty($props) ) { // try to get data by name and props => return props values

            // get infos about the planete
            $planete = $em->getRepository('AppBundle:Body')->getValuesPlaneteByNameAndProps($planete_name, $props);

            $satellites = array();

            array_push($this->satellites, array("planete" => $planete));

            try {
              if(isset($planete[0]["rotation_id"]) || !empty($planete[0]["rotation_id"])) {
                $this->getSubSat($planete[0]["rotation_id"]);
              }
            } catch (Exception $e) {
              // echo "err".$e;
            }

            if(isset($data_type) && !empty($data_type)) {
              if(strtolower($data_type) == "html") {

                $html = $this->generateHtml($planete, $props);
                return new Response($html);
              }
              else {
                 // defaut generate JSON // genereate only all props requested
                 $this->satellites = $this->removeUnrequestProps($this->satellites, $props);
                 return new JsonResponse($this->satellites);
              }
            }

            // defaut generate JSON
            return new JsonResponse($this->satellites);
          }

       }
       else
        return new Response("Erreur : ce n'est pas une requete xhr");
     }

     return $this->render('body/api.html.twig');
    }

    /**
     * Generate html
     * @param($planete, $arrayProps)
     * @return html
     */
     private function generateHtml($planete, $props) {

       $html = "<table><tbody>";

       foreach ($planete[0] as $key_planete => $value) {
        //  var_dump($value);die();
         if( $key_planete == "rotation_id" ) continue;

         foreach ($props as $key => $prop) {
           if($prop == $key_planete) {
             $html .= "<tr><td>".$prop."</td><td>".$value."</td></tr>";
           }
         }
       }

       $html .= "</tbody></table>";
       return $html;
     }

    /**
     * Remove all unrequest properties
     * @param($planete, $arrayProps)
     * @return $planete - with right props
     */
    private function removeUnrequestProps($planete, $props) {

      $new_planete = array();

      foreach ($planete[0]["planete"][0] as $key_planete => $value) {

        foreach ($props as $key => $prop) {
          if($prop == $key_planete) {
            //add props for new tab
            $new_planete[$prop] = $planete[0]["planete"][0][$key_planete];
          }
        }
      }

      $planete[0]["planete"][0] = $new_planete;
      return $planete;
    }

    /**
     * Get all sub sattelite by planete
     * @param($planete)
     */
    private function getSubSat($planete) {

       if(count($planete) > 0) {
         array_push($this->satellites, $planete);

         $em = $this->getDoctrine()->getManager();
         $planete = $em->getRepository('AppBundle:Body')->getAllInfosPlaneteById($planete["id"]);

         if(count($planete) > 0) {

          try {
            if( count($planete[0]["rotation_id"]) > 0)
              $this->getSubSat($planete[0]["rotation_id"]);
          } catch (Exception $e) {
            //if error its the last satellite

              try {
                if(count($planete["rotation_id"]) > 0) {
                  $this->getSubSat($planete["rotation_id"]);
                }
              } catch (Exception $e) { }
            }
          }
        }
   }
}
