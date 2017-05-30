<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Extrasolar\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Type controller.
 *
 * @Route("admin/type")
 */
 class TypeController extends Controller
 {
     /**
      * Lists all type entities.
      *
      * @Route("/", name="type_index")
      * @Method("GET")
      */
     public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();

         $types = $em->getRepository('AppBundle:Type')->findAll();
         //dump($types);
         //die();
         return $this->render('type/index.html.twig', array(
             'types' => $types,
             'title' => 'Back Office : Type'
         ));
     }

     /**
      * Creates a new type entity.
      *
      * @Route("/new", name="type_new")
      * @Method({"GET", "POST"})
      */
     public function newAction(Request $request)
     {
         $type = new Type();
         $form = $this->createForm('AppBundle\Form\TypeType', $type, ['types' => $this->getParameter('types')]);
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($type);
             $em->flush($type);

             return $this->redirectToRoute('type_show', array('id' => $type->getId()));
         }

         return $this->render('type/new.html.twig', array(
             'type' => $type,
             'form' => $form->createView(),
             'title'=> 'Back Office : Ajouter un Type'
         ));
     }

     /**
      * Finds and displays a type entity.
      *
      * @Route("/{id}", name="type_show")
      * @Method("GET")
      */
     public function showAction(Type $type)
     {
         $deleteForm = $this->createDeleteForm($type);
         return $this->render('type/show.html.twig', array(
             'type' => $type,
             'delete_form' => $deleteForm->createView(),
             'title' => 'Back Office : '.$type->getName()
         ));
     }

     /**
      * Displays a form to edit an existing type entity.
      *
      * @Route("/{id}/edit", name="type_edit")
      * @Method({"GET", "POST"})
      */
     public function editAction(Request $request, Type $type)
     {
         $deleteForm = $this->createDeleteForm($type);

         if ($type->getPicture()){
             $type->setPicture(new File($this->getParameter('pictures_directory').'/Type/'.$type->getPicture())
             //$type->setPicture($type->getPicture());
             //new File($this->getParameter('pictures_directory').'/'.$type->getPicture())
           );
         }

         $editForm = $this->createForm('AppBundle\Form\TypeType', $type, ['types' => $this->getParameter('types')]);
         $editForm->handleRequest($request);
         if ($editForm->isSubmitted() && $editForm->isValid()) {
             $this->getDoctrine()->getManager()->flush();
             //new File($this->getParameter('pictures_directory').'/Type/'.$type->getPicture());
             //$type->setPicture($type->getPicture());

             return $this->redirectToRoute('type_show', array('id' => $type->getId()));
         }

         return $this->render('type/edit.html.twig', array(
             'type' => $type,
             'edit_form' => $editForm->createView(),
             'delete_form' => $deleteForm->createView(),
             'title' => 'Editer un type'
         ));
     }

     /**
      * Deletes a type entity.
      *
      * @Route("/{id}", name="type_delete")
      * @Method("DELETE")
      */
     public function deleteAction(Request $request, Type $type)
     {
         $form = $this->createDeleteForm($type);
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->remove($type);
             $em->flush($type);
         }

         return $this->redirectToRoute('type_index');
     }

     /**
      * Creates a form to delete a type entity.
      *
      * @param Type $type The type entity
      *
      * @return \Symfony\Component\Form\Form The form
      */
     private function createDeleteForm(Type $type)
     {
         return $this->createFormBuilder()
             ->setAction($this->generateUrl('type_delete', array('id' => $type->getId())))
             ->setMethod('DELETE')
             ->getForm()
         ;
     }
 }
