<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
}
