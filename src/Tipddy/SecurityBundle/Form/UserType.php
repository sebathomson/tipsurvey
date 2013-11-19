<?php

namespace Tipddy\SecurityBundle\Form;

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
            ->add('firstName')
            ->add('lastName');

            if (null == $options['data']->getId()) {
                $builder->add('email')
                ->add('password', 'password', array('required'=>true));
            } else {
                $builder->add('email', null, array('read_only' => true))
                ->add('password', 'password', array('required'=>false));
            }

            $builder
            // ->add('salt')
            ->add('address')
            ->add('userRoles')
            ;
        }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tipddy\SecurityBundle\Entity\User'
            ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tipddy_securitybundle_user';
    }
}
