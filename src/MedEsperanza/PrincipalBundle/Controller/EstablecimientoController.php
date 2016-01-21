<?php

namespace MedEsperanza\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MedEsperanza\PrincipalBundle\Entity\Establecimiento;
use MedEsperanza\PrincipalBundle\Form\EstablecimientoType;
use MedEsperanza\PrincipalBundle\Entity\Especialidad;

/**
 * Establecimiento controller.
 *
 */
class EstablecimientoController extends Controller
{
    /**
     * Lists all Establecimiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->findAll();

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Establecimiento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establecimiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }
    
    
    public function showExtraAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->createQuery('SELECT e FROM MedEsperanzaPrincipalBundle:Especialidad e ORDER BY e.nombre')->getResult();
        $entity = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->find($id);
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establecimiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:showExtra.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'entities'    => $entities,

        ));
    }

    /**
     * Displays a form to create a new Establecimiento entity.
     *
     */
    public function newAction()
    {
        $entity = new Establecimiento();
        $form   = $this->createForm(new EstablecimientoType(), $entity);

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Establecimiento entity.
     *
     */
    public function createAction()
    {
        $entity  = new Establecimiento();
        $request = $this->getRequest();
        $form    = $this->createForm(new EstablecimientoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('establecimiento_show', array('id' => $entity->getId())));
            
        }

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Establecimiento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establecimiento entity.');
        }

        $editForm = $this->createForm(new EstablecimientoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Establecimiento entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Establecimiento entity.');
        }

        $editForm   = $this->createForm(new EstablecimientoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('establecimiento_edit', array('id' => $id)));
        }

        return $this->render('MedEsperanzaPrincipalBundle:Establecimiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Establecimiento entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('MedEsperanzaPrincipalBundle:Establecimiento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Establecimiento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('establecimiento'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
      /**
     * Lists all Establecimiento entities.
     *
     */
    public function indexEspecialidadAction($id)
    {
        
        
        $em = $this->getDoctrine()->getEntityManager();

        $entity =  $em->getRepository('MedEsperanzaPrincipalBundle:Especialidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Especialidad entity.');
        }
        
        
        
        $entity->getEstablecimientos()->initialize( );
        $entity->getEstablecimientos()->takeSnapshot( );
        $entitiesEstablecimientos =  $entity->getEstablecimientos()->getSnapshot();
        
        $entities = $em->createQuery('SELECT e FROM MedEsperanzaPrincipalBundle:Especialidad e ORDER BY e.nombre')->getResult();

        
        return $this->render('MedEsperanzaPrincipalBundle:Default:estableciminetoPorCategoria.html.twig', array(
            'entitiesEstablecimientos' => $entitiesEstablecimientos, 'entities' => $entities, 'entityCategoria' => $entity
        ));
    }
}
