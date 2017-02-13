<?php
// src/AppBundle/FileUploader.php
namespace AppBundle;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload($entity, UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->targetDir.'/'.$this->getSpecificDir($entity), $fileName);

        return $fileName;
    }

    public function getTargetDir($entity){
      return $this->targetDir.'/'.$this->getSpecificDir($entity);
    }

    public function getSpecificDir($entity){
      $array = explode('\\',get_class($entity));
      return end($array);
    }
    public function getAssetPath($entity){
      return 'uploads/pictures/'.$this->getSpecificDir($entity);
    }
}
 ?>
