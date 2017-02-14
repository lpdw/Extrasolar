<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extrasolar\Body;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("catalogue/", name="catalogue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')){
        $bodies = $em->getRepository('AppBundle:Body')->findAllBodiesAdmin();
        }
        else{
        $bodies = $em->getRepository('AppBundle:Body')->findAllBodies();
        }

        return $this->render('body/index.html.twig', array(
            'bodies' => $bodies,
            'title' => 'Catalogue'
        ));
    }

    /**
     * @Route("admin/catalogue/body.json/{name}", name="bodyjson")
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
     * @Route("admin/catalogue/body.json/seff/{host}/{typeID}/{axis}", name="calculSeff")
     *@Method("GET")
     */
    public function calculSeff(Request $request){

      $em = $this->getDoctrine()->getManager();
      $type = $em->getRepository('AppBundle:Type')->find($request->get('typeID'));

      $types = $this->getParameter('types');
      if ($request->get('host_id') || $type->getCategorie() != $types['point'] || $type->getCategorie() != $types['star'] ){
        $host = $em->getRepository('AppBundle:Body')->getHost($request->get('host_id'));
        $seffDatas = array(0 => $host);
        if($host->getTypeId()->getCategorie() === $types['point'])
        {
          $seffDatas = [];
          foreach($host->getSatellites() as $satellite){
            if ($satellite->getTypeId()->getCategorie() === $types['star']){
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
     * @Route("admin/catalogue/")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $body = new Body();
        $form = $this->createForm('AppBundle\Form\BodyType', $body);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $calculs = $this->get('app.calculs');
            //CONVERT DISTANCE
            $distance = null;
            if(!empty($form['distance']->getData()))
            {
              $distance = $calculs->convertDistance($form['distance']->getData(), $form['parsecs']->getData());
              $body->setDistance($distance);
            }
            //CONVERT AXIS
            if(!empty($form['axis']->getData()))
            {
                $axis = $calculs->convertAxis($form['axis']->getData(), $form['UA']->getData(), $distance );
                $body->setAxis($axis);
            }

            //CONVERT RADIUS
            if(!empty($form['radius']->getData()))
            {
              $radius = $calculs->convertRadius($form['radius']->getData(), $form['Rt']->getData());
              $body->setRadius($radius);
            }
            //CONVERT MASSE
            if(!empty($form['masse']->getData()))
            {
              $masse = $calculs->convertMasse($form['masse']->getData(), $form['Mt']->getData());
              $body->setMasse($masse);
            }
            //CONVERT ANNEE
            if(!empty($form['period']->getData())){
              $period = $calculs->convertPeriod($form['period']->getData(), $form['jours']->getData());
              $body->setPeriod($distance);
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
            'title'=> 'Ajouter un astre'
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
            'articles' => $posts,
            'title' => $body->getName()
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

            $calculs = $this->get('app.calculs');
            //CONVERT DISTANCE
            $distance = null;
            if(!empty($editForm['distance']->getData()))
            {
              $distance = $calculs->convertDistance($editForm['distance']->getData(), $editForm['parsecs']->getData());
              $body->setDistance($distance);
            }
            //CONVERT AXIS
            if(!empty($editForm['axis']->getData()))
            {
                $axis = $calculs->convertAxis($editForm['axis']->getData(), $editForm['UA']->getData(), $distance );
                $body->setAxis($axis);
            }

            //CONVERT RADIUS
            if(!empty($editForm['radius']->getData()))
            {
              $radius = $calculs->convertRadius($editForm['radius']->getData(), $editForm['Rt']->getData());
              $body->setRadius($radius);
            }
            //CONVERT MASSE
            if(!empty($editForm['masse']->getData()))
            {
              $masse = $calculs->convertMasse($editForm['masse']->getData(), $editForm['Mt']->getData());
              $body->setMasse($masse);
            }
            //CONVERT ANNEE
            if(!empty($editForm['period']->getData())){
              $period = $calculs->convertPeriod($editForm['period']->getData(), $editForm['jours']->getData());
              $body->setPeriod($distance);
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
            'title' => 'Editer un astre'
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
