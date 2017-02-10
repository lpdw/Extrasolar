<?php
// src/AppBundle/Twig/AppExtension.php
namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{

  private $backgroundImageInfo = null;
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
        new \Twig_SimpleFunction('getBackgroundImageData', array($this,'getBackgroundImageData')),
        new \Twig_SimpleFunction('getBackgroundImageURL', array($this,'getBackgroundImageURL')),
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

    public function getBackgroundImageData(){
      if ($this->backgroundImageInfo == null){
        $this->backgroundImageInfo =  json_decode($this->wpConstantes->getBackgroundimage(), true);
      }
      return "src='{$this->backgroundImageInfo['illdy::header_image']['value']}'
              width='{$this->backgroundImageInfo['illdy::header_image_data']['value']['width']}'
              height='{$this->backgroundImageInfo['illdy::header_image']['value']['height']}'
              alt='{$this->backgroundImageInfo['illdy::header_image']['value']['height']}'";
    }

    public function getBackgroundImageURL(){
        dump($this->backgroundImageInfo);
      if ($this->backgroundImageInfo == null){
        $this->backgroundImageInfo =  json_decode($this->wpConstantes->getBackgroundimage(), true);
      }
      return $this->backgroundImageInfo['illdy::header_image']['value'];
    }
    public function getName()
    {
        return 'app_extension';
    }
}
?>
