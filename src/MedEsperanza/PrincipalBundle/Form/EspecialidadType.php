<?php

namespace MedEsperanza\PrincipalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EspecialidadType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            //->add('fotobanner',  'file' )
        ;
    }

    public function getName()
    {
        return 'medesperanza_principalbundle_especialidadtype';
    }
}
