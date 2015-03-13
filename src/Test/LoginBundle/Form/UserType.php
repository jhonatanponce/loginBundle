<?php

namespace Test\LoginBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('attr' => array('required' => true,'class'=>'form-control', 'placeholder'=>'Ingrese su nombre de usuario. Ejemplo: jperez')))
            ->add('password', 'password', array('attr' => array('required' => true,'class'=>'form-control', 'placeholder'=>'Ingrese una contraseña.')))
            //->add('salt') //No necesitamos que salt sea mostrado ---------------
            ->add('user_roles', 'entity', array('class'   => 'TestLoginBundle:Role','property'   => 'name','attr' => array('class'=>'form-control validate[required]'),'multiple' => 'true'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\LoginBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test_loginbundle_user';
    }
}
