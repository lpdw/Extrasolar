<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\Blank;
use AppBundle\Form\DataTransformer\BodyToNameTransformer;
use Doctrine\Common\Persistence\ObjectManager;

class BodyType extends AbstractType
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //->add('type_id')
          ->add('type_id', EntityType::class, array(
              'class' => 'AppBundle:Type',
              'choice_label' => 'name',
              'choice_attr' => function ($key, $index) {
                  return ['data-categorie' => $key->getCategorie() ];
              },
              'label' => "Type d'astre"
          ))
          ->add('parsecs', ChoiceType::class, array(
                'choices'  => array(
                'parsecs' => 0,
                'années lumières' => 1,
              ),
              'mapped' => false,
              'label' => false
          ))
          ->add('Rt', ChoiceType::class, array(
                'choices'  => array(
                'Rt' => 0,
                'Rj' => 1,
                'Rs' => 2
              ),
              'mapped' => false,
              'label' => false
          ))
          ->add('Mt', ChoiceType::class, array(
                'choices'  => array(
                'Mt' => 0,
                'Mj' => 1,
                'Ms' => 2
              ),
              'mapped' => false,
              'label' => false
          ))
          ->add('UA', ChoiceType::class, array(
                'choices'  => array(
                'UA' => 0,
                'arcsec' => 1,
              ),
              'mapped' => false,
              'label' => false
          ))
          ->add('jours', ChoiceType::class, array(
                'choices'  => array(
                'jours' => 0,
                'années' => 1,
                'heures' => 2,
              ),
              'mapped' => false,
              'label' => false
          ))
          ->add('rotation_id', TextType::class,array(
            'required' => false,
            'invalid_message' => 'Ce n\'est pas un nom de hôte valide',
            'label' => "Nom de l'hôte"
          ))
          ->add('name')
          ->add('ra')
          ->add('distance')
          ->add('masse')
          ->add('radius')
          ->add('density')
          ->add('age')
          ->add('temperature')
          ->add('molecules')
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
          ->add('seff')
        ;
        $builder->get('rotation_id')
            ->addModelTransformer(new BodyToNameTransformer($this->manager));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Extrasolar\Body'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_body';
    }


}
