<?php

namespace MedEsperanza\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {        
        return $this->render('MedEsperanzaPrincipalBundle:Default:index.html.twig' );
    }
    
    public function indexCategoriaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
            
        $entities = $em->createQuery('SELECT e FROM MedEsperanzaPrincipalBundle:Especialidad e ORDER BY e.nombre')->getResult();
        
        return $this->render('MedEsperanzaPrincipalBundle:Default:indexOri.html.twig', array(
            'entities' => $entities
        ));
    
    }
    
    public function ubicacionMedEspecAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
            
        $entities = $em->createQuery('SELECT e FROM MedEsperanzaPrincipalBundle:Especialidad e ORDER BY e.nombre')->getResult();
        
        return $this->render('MedEsperanzaPrincipalBundle:Default:ubicacionMedEspec.html.twig', array(
            'entities' => $entities
        ));
    
    }
}
