<?php
// src/AppBundle/EventListener/PictureUploadListener.php
namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Extrasolar\Type;
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
        // upload only works for Type entities
        if (!$entity instanceof Type || empty($entity->getPicture())) {
            return;
        }
        $fileName = $entity->getPicture();
        $entity->setPicture(new File($this->uploader->getTargetDir().'/'.$fileName));
    }
    private function uploadFile($entity)
    {
        // upload only works for Type entities
        if (!$entity instanceof Type || empty($entity->getPicture())) {
            return;
        }

        $file = $entity->getPicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setPicture($fileName);
    }
}
 ?>
