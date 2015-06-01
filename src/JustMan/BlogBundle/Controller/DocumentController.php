<?php

namespace JustMan\BlogBundle\Controller;

use JustMan\BlogBundle\Entity\Document;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Document controller.
 *
 * @Route("/document")
 */
class DocumentController extends Controller
{

/**
 * @Template()
 */
public function uploadAction(Request $request)
{
    $document = new Document();
    $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file')
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        
        $document->upload();

        $em->persist($document);
        $em->flush();

        //return $this->redirectToRoute(...);
        return new Response($document->getName());
    }

    return array('form' => $form->createView());
}
}
