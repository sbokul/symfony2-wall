<?php

namespace Xperts\WallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('userID')
            ->add('firstName')
            ->add('lastName')
            ->add('email')
        ;
    }

    public function getName()
    {
        return 'xperts_wallbundle_usertype';
    }
}
