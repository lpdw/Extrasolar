<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class PublicityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array(
                  'label' => 'Nom'
                ))
                ->add('link', UrlType::class, array(
                  'label' => 'Lien'
                ))
                ->add('file', FileType::class, array(
                  'label'=> 'Uploader une nouvelle image',
                  'required' => false
                ))
                ->add('picture', HiddenType::class)
                ->add('disable', CheckboxType::class, array(
                  'label'=> 'Désactiver la publicité',
                  'required' => false
                ))
                ->add('location', NumberType::class, array(
                  'label' => 'Emplacement'
                ))
                ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Extrasolar\Publicity',
            'error_mapping' => array(
            'picture' => 'file',
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_publicity';
    }


}
