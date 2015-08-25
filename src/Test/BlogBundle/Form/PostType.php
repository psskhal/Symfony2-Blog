<?php

namespace Test\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends  AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name')->add('email')->add('address')->add('text');
    }

    public function setDefautlOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array('data_class' => 'Test\BlogBundle\Entity\Post'));
    }

    public function getName()
    {
        return 'test_blogbundle_post';
    }
}