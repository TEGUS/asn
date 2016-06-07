<?php

namespace Application\Sonata\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstname', 'text', array('required' => false))
                ->add('lastname', 'text')
                ->add('date_of_birth', 'birthday')
                ->add('country', 'country')
                ->add('gender', 'choice', array('choices' => array('m' => 'Masculin', 'f' => 'Feminin')))
                ->add('phone', 'integer')
                ->add('indicatifCountry', 'text')
                ->add('email', 'email')
                ->add('emailRecuperation', 'email')
                ->add('hidefield', 'text')
                ->add('hidefieldCountry', 'text', array('attr' => array(
                        'class' => 'hidefieldCountry',
                        'type' => 'hidden'
                )))
                ->add('password', 'password', array('attr' => array('minlength' => 8)))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Application\Sonata\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'application_sonata_userbundle_user';
    }

}
