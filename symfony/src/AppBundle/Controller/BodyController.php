<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extrasolar\Body;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Body controller.
 *
 * @Route("/")
 */
class BodyController extends Controller
{
    /**
     * Lists all body entities.
     *
     * @Route("/catalogue", name="catalogue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bodies = $em->getRepository('AppBundle:Body')->findAllBodies();
        return $this->render('body/index.html.twig', array(
            'bodies' => $bodies,
        ));
    }

    /**
     *
     * @Route("catalogue/body.json/{name}", name="bodyjson")
     */
    public function listejson(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $term = trim(strip_tags($request->get('name')));

      $bodies = $em->getRepository('AppBundle:Body')->createQueryBuilder('c')
         ->where('c.name LIKE :name')
         ->setParameter('name', '%'.$term.'%')
         ->getQuery()
         ->getResult();

      $serializer = $this->get('serializer');
      $reports = $serializer->serialize($bodies, 'json');

      return new \Symfony\Component\HttpFoundation\Response($reports);
    }
    /**
     *
     * @Route("catalogue/body.json/seff/{host_id}/{type_id}/{axis}", name="calculSeff")
     */
    public function calculSeff(Request $request){

      $em = $this->getDoctrine()->getManager();
      $type = $em->getRepository('AppBundle:Type')->find($request->get('type_id'));
      if ($request->get('host_id') || $type->getCategorie() != "Point" || $type->getCategorie() != "Star" ){
        $host = $em->getRepository('AppBundle:Body')->getHost($request->get('host_id'));
        $seffDatas = array(0 => $host);
        if($host->getTypeId()->getCategorie() === "Point")
        {
          $seffDatas = [];
          foreach($host->getSatellites() as $satellite){
            if ($satellite->getTypeId()->getCategorie() === "Star"){
              array_push($seffDatas, $satellite);
            }
          }
        }
        $calculs = $this->get('app.calculs');
        $seff = $calculs->calculSeff($request->get('axis'), $seffDatas);
        return new \Symfony\Component\HttpFoundation\Response($seff);
      }
    }

    /**
     * Creates a new body entity.
     *
     * @Route("admin/catalogue/new", name="catalogue_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $body = new Body();
        $form = $this->createForm('AppBundle\Form\BodyType', $body);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //CALCUL DISTANCE
            if($form['distance']->getData()){
                $distance=$form['distance']->getData();
                if($form['parsecs']->getData()==1){
                  $distance=$form['distance']->getData()*(9.46E+15/3.09E+16);
                  $body->setDistance($distance);
                }
            }

            //CALCULE RADIUS
            if($form['radius']->getData() && $form['Rt']->getData()==1){
                $body->setDistance($form['radius']->getData()*(69911000/6371008));
            }
            elseif($form['radius']->getData() && $form['Rt']->getData()==2){
                $body->setDistance($form['radius']->getData()*(696342000/6371008));
            }

            //CALCULE MASSE
            if($form['masse']->getData() && $form['Mt']->getData()==1){
                $body->setDistance($form['masse']->getData()*(69911000/6371008));
            }
            elseif($form['masse']->getData() && $form['Mt']->getData()==2){
                $body->setDistance($form['masse']->getData()*(696342000/6371008));
            }

            //CALCUL DISTANCE
            if($form['axis']->getData() && $form['UA']->getData()==1 && $form['distance']->getData()){
                $body->setDistance($form['axis']->getData()*$distance);
            }

            //CALCULE ANNEE
            if($form['period']->getData() && $form['jours']->getData()==1){
                $body->setDistance($form['period']->getData()*365.25);
            }
            elseif($form['period']->getData() && $form['jours']->getData()==2){
                $body->setDistance($form['period']->getData()/24);
            }

            if($form['rotation_id']->getData())
            {
                $body_2 = $em->getRepository('AppBundle:Body')->find($form['rotation_id']->getData());
                $body->setRotationId($body_2);
            }

            $em->persist($body);
            $em->flush($body);
            return $this->redirectToRoute('catalogue_show', array('id' => $body->getId()));
        }

        return $this->render('body/new.html.twig', array(
            'body' => $body,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a body entity.
     *
     * @Route("catalogue/{id}", name="catalogue_show")
     * @Method("GET")
     */
    public function showAction(Body $body)
    {
        $deleteForm = $this->createDeleteForm($body);
        $em = $this->getDoctrine()->getManager('extrablog');
        $posts = $em->getRepository('AppBundle:WpPosts')->getArticle($body->getName());

        return $this->render('body/show.html.twig', array(
            'body' => $body,
            'delete_form' => $deleteForm->createView(),
            'articles' => $posts
        ));
    }

    /**
     * Displays a form to edit an existing body entity.
     *
     * @Route("admin/catalogue/{id}/edit", name="catalogue_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Body $body)
    {
        $deleteForm = $this->createDeleteForm($body);
        $editForm = $this->createForm('AppBundle\Form\BodyType', $body);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //CALCUL DISTANCE
            if($editForm['distance']->getData()){
                $distance=$editForm['distance']->getData();
                if($editForm['parsecs']->getData()==1){
                  $distance=$editForm['distance']->getData()*(9.46E+15/3.09E+16);
                  $body->setDistance($distance);
                }
            }

            //CALCULE RADIUS
            if($editForm['radius']->getData() && $editForm['Rt']->getData()==1){
                $body->setDistance($editForm['radius']->getData()*(69911000/6371008));
            }
            elseif($editForm['radius']->getData() && $editForm['Rt']->getData()==2){
                $body->setDistance($editForm['radius']->getData()*(696342000/6371008));
            }

            //CALCULE MASSE
            if($editForm['masse']->getData() && $editForm['Mt']->getData()==1){
                $body->setDistance($editForm['masse']->getData()*(69911000/6371008));
            }
            elseif($editForm['masse']->getData() && $editForm['Mt']->getData()==2){
                $body->setDistance($editForm['masse']->getData()*(696342000/6371008));
            }

            //CALCUL DISTANCE
            if($editForm['axis']->getData() && $editForm['UA']->getData()==1 && $editForm['distance']->getData()){
                $body->setDistance($editForm['axis']->getData()*$distance);
            }

            //CALCULE ANNEE
            if($editForm['period']->getData() && $editForm['jours']->getData()==1){
                $body->setDistance($editForm['period']->getData()*365.25);
            }
            elseif($editForm['period']->getData() && $editForm['jours']->getData()==2){
                $body->setDistance($editForm['period']->getData()/24);
            }

            $body_2 = $em->getRepository('AppBundle:Body')->find($editForm['rotation_id']->getData());
            $body->setRotationId($body_2);

            $em->persist($body);
            $em->flush($body);

            return $this->redirectToRoute('catalogue_show', array('id' => $body->getId()));
        }

        return $this->render('body/edit.html.twig', array(
            'body' => $body,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a body entity.
     *
     * @Route("admin/catalogue/{id}", name="catalogue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Body $body)
    {
        $form = $this->createDeleteForm($body);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($body);
            $em->flush($body);
        }

        return $this->redirectToRoute('catalogue_index');
    }

    /**
     * Creates a form to delete a body entity.
     *
     * @param Body $body The body entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Body $body)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('catalogue_delete', array('id' => $body->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
