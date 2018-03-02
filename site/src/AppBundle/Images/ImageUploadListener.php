<?php
namespace AppBundle\Images;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Film;
use AppBundle\Controller\ImagesController;

class ImageUploadListener
{
private $uploader;

public function __construct(ImagesController $uploader)
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

private function uploadFile($entity)
{
// upload only works for Product entities
if (!$entity instanceof Plat) {
return;
}

$file = $entity->getImage();

// only upload new files
if (!$file instanceof UploadedFile) {
return;
}

$fileName = $this->uploader->upload($file);
$entity->setImage($fileName);
}
}