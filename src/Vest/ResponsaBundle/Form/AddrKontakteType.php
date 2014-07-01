<?php

namespace Vest\ResponsaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddrKontakteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('kontaktKdnr')
            ->add('kontaktTyp')
            ->add('kontaktAnrede')
            ->add('kontaktName')
            ->add('kontaktName2')
            ->add('kontaktName3')
            ->add('kontaktKurzname')
            ->add('kontaktStrasse')
            ->add('kontaktPlz')
            ->add('kontaktOrt')
            ->add('kontaktTelefon')
            ->add('kontaktTelefax')
            ->add('kontaktEmail')
            ->add('kontaktUrl')
            ->add('kontaktBemerkung')
            ->add('kontaktAktualisiert')
            ->add('statusId')
            ->add('parentId')
            ->add('protectionLevel')
            ->add('recordStatus')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vest\ResponsaBundle\Entity\AddrKontakte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vest_responsabundle_addrkontakte';
    }
}
