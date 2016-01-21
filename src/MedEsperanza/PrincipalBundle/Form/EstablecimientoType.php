<?php

namespace MedEsperanza\PrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EstablecimientoType extends AbstractType
{
        public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('ubicacion')
            ->add('descripcioncorta')
            ->add('descripcionlarga')
            ->add('responsable')
            ->add('email')
            ->add('telefonofijo')
            ->add('telefonomovil')
            //->add('banner')
            //->add('fotografia')
            ->add('paginaespecial')
            ->add('horarioatencion')            
            ->add('idespecialidad','entity', array('class'=>'MedEsperanza\PrincipalBundle\Entity\Especialidad', 'property'=>'id', 'property'=>'nombre' ));
        ;
    }

    public function getName()
    {
        return 'medesperanza_principalbundle_establecimientotype';
    }
}
