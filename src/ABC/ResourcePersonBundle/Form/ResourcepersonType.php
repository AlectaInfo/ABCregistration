<?php

namespace ABC\ResourcePersonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResourcepersonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname','text')
            ->add('lastname','text')
            ->add('address','text',array(
                'attr'=>array(
                'max-length'=>'10',
                   
                )
            ))
            ->add('phone','text')    
            ->add('email','email')
            ->add('photo','file')
            ->add('post','choice',array(
                'choices'=> array('Lecturer'=>'Lecturer','Lab Assistant'=>'Lab Assistant'),
                'empty_value'=> 'Select a post'
            ))
            ->add('deptName')
            ->add('qualification')
         //   ->add('session')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ABC\ResourcePersonBundle\Entity\Resourceperson'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'abc_resourcepersonbundle_resourceperson';
    }
}
