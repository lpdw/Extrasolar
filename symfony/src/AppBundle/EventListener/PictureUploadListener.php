<?php
// src/AppBundle/EventListener/PictureUploadListener.php
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Extrasolar\Type;
use AppBundle\Entity\Extrasolar\Publicity;
use AppBundle\FileUploader;

class PictureUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {

        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }
    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        // upload only works for Type entities or Publicity
        if (!method_exists($entity,'getPicture') ) {
            return;
        }
        if (empty($fileName = $entity->getPicture())){
          return;
        };

        $entity->setPicturePath(new File($this->uploader->getAssetPath($entity).'/'.$fileName));

    }
    private function uploadFile($entity)
    {
        // upload only when a getPicture method
        if (!method_exists($entity,'getFile') ) {
            return;
        }
        $file = $entity->getFile();
        // only upload new files
        if (!$file instanceof UploadedFile || empty($file)) {
            return;
        }
        $fileName = $this->uploader->upload($entity, $file);
        $entity->setPicture($fileName);

    }
}
 ?>
