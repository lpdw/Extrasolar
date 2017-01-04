<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extrasolar\Bodie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bodie controller.
 *
 * @Route("catalogue")
 */
class BodieController extends Controller
{
    /**
     * Lists all bodie entities.
     *
     * @Route("/", name="catalogue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bodies = $em->getRepository('AppBundle:Bodie')->findAll();

        return $this->render('bodie/index.html.twig', array(
            'bodies' => $bodies,
        ));
    }

    /**
     * Creates a new bodie entity.
     *
     * @Route("/new", name="catalogue_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bodie = new Bodie();
        $form = $this->createForm('AppBundle\Form\BodieType', $bodie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bodie);
            $em->flush($bodie);

            return $this->redirectToRoute('catalogue_show', array('id' => $bodie->getId()));
        }

        return $this->render('bodie/new.html.twig', array(
            'bodie' => $bodie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bodie entity.
     *
     * @Route("/{id}", name="catalogue_show")
     * @Method("GET")
     */
    public function showAction(Bodie $bodie)
    {
        $deleteForm = $this->createDeleteForm($bodie);

        return $this->render('bodie/show.html.twig', array(
            'bodie' => $bodie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bodie entity.
     *
     * @Route("/{id}/edit", name="catalogue_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bodie $bodie)
    {
        $deleteForm = $this->createDeleteForm($bodie);
        $editForm = $this->createForm('AppBundle\Form\BodieType', $bodie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catalogue_edit', array('id' => $bodie->getId()));
        }

        return $this->render('bodie/edit.html.twig', array(
            'bodie' => $bodie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bodie entity.
     *
     * @Route("/{id}", name="catalogue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bodie $bodie)
    {
        $form = $this->createDeleteForm($bodie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bodie);
            $em->flush($bodie);
        }

        return $this->redirectToRoute('catalogue_index');
    }

    /**
     * Creates a form to delete a bodie entity.
     *
     * @param Bodie $bodie The bodie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bodie $bodie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('catalogue_delete', array('id' => $bodie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
