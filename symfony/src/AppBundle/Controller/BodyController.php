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
 * @Route("catalogue")
 */
class BodyController extends Controller
{
    /**
     * Lists all body entities.
     *
     * @Route("/", name="catalogue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bodies = $em->getRepository('AppBundle:Body')->findAll();
        return $this->render('body/index.html.twig', array(
            'bodies' => $bodies,
        ));
    }

    /**
     *
     * @Route("/body.json/{name}", name="bodyjson")
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
     * Creates a new body entity.
     *
     * @Route("/new", name="catalogue_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $body = new Body();
        $form = $this->createForm('AppBundle\Form\BodyType', $body);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // $datas = $request->request->all()['appbundle_body'];
            // $host = $em->getRepository('AppBundle:Body')->getParentType($datas['rotation_id']);
            // dump($parent->getBy('type'));
            // if($parent === "point")
            // {
            //
            // }
            // $host = $em->getRepository('AppBundle:Body')->find($body->getRotationId());
            // dump($host);
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
     * @Route("/{id}", name="catalogue_show")
     * @Method("GET")
     */
    public function showAction(Body $body)
    {
        $deleteForm = $this->createDeleteForm($body);

        return $this->render('body/show.html.twig', array(
            'body' => $body,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing body entity.
     *
     * @Route("/{id}/edit", name="catalogue_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Body $body)
    {
        $deleteForm = $this->createDeleteForm($body);
        $editForm = $this->createForm('AppBundle\Form\BodyType', $body);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catalogue_edit', array('id' => $body->getId()));
        }

        return $this->render('body/edit.html.twig', array(
            'body' => $body,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a body entity.
     *
     * @Route("/{id}", name="catalogue_delete")
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
