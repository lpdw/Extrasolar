<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class TypeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
              'label' => 'Nom'
            ))
            ->add('categorie', ChoiceType::class, array(
              'choices'  => $options['types'],
              'label' => 'Catégorie d\'astre'
              ))
            ->add('picture', HiddenType::class)
            ->add('description', TextType::class, array(
              'label' => 'description',
              'required' => false,
              'empty_data' => "  ",
            ))
            ->add('file', FileType::class,array(
              'required' => false,
              'label' => 'Uploader une image'))
                ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Extrasolar\Type',
            'types' => []
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_type';
    }


}
