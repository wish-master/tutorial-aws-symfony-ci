<?php


namespace App\Controller;


use App\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="public_entrypoint")
     * @return Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('App:Test')->find(1);
        if(!$entity)
        {
            $entity = new Test();
            $entity->setValue(time());
            $em->persist($entity);
            $em->flush();
        }

        return $this->render('default/index.html.twig', ['variable' => $entity->getValue()]);
    }
}