<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BodieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('name')
          ->add('ra')
          ->add('distance')
          ->add('masse')
          ->add('radius')
          ->add('density')
          ->add('age')
          ->add('seff')
          ->add('temperature')
          ->add('molecules')
          ->add('update_at')
          ->add('discovery')
          ->add('detection')
          ->add('decl')
          ->add('metallicity')
          ->add('spectral_type')
          ->add('vari')
          ->add('axis')
          ->add('period')
          ->add('excentricity')
          ->add('inclinaison')
          ->add('omega')
          ->add('tref')
          ->add('rotation_id')
          ->add('type_id')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Extrasolar\Bodie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_bodie';
    }


}
