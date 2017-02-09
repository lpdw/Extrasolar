<?php
// src/AppBundle/Twig/AppExtension.php
namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return Twig_SimpleFunction[]
     */
    function getFunctions()
    {
      return array(
        new \Twig_SimpleFunction('getRootURL', array($this,'getRootURL')),
      );
    }

    /**
     * @var RatingService
     */
    protected $wpConstantes;

    public function __construct($wpConstantes)
    {
      $this->wpConstantes = $wpConstantes;
    }

    public function getRootURL(){
      return $this->wpConstantes
                  ->getRootURL();
    }

    public function getName()
    {
        return 'app_extension';
    }
}
?>
