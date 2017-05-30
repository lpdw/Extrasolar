<?php
// src/AppBundle/Form/DataTransformer/BodyToNameTransformer.php
namespace AppBundle\Form\DataTransformer;

use AppBundle\Entity\Body;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class BodyToNameTransformer implements DataTransformerInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Transforms an object (body) to a string (name).
     *
     * @param  Body|null $body
     * @return string
     */
    public function transform($body)
    {
        if (null === $body) {
            return '';
        }

        return $body->getName();
    }

    /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $bodyNumber
     * @return Body|null
     * @throws TransformationFailedException if object (body) is not found.
     */
    public function reverseTransform($bodyName)
    {
        // no body name? It's optional, so that's ok
        if (!$bodyName) {
            return;
        }

        $body = $this->manager
            ->getRepository('AppBundle:Body')
            // query for the body with this name
            ->findOneByName($bodyName)
        ;

        if (null === $body) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'Un astre avec le nom "%s" n\'existe pas',
                $bodyName
            ));
        }

        return $body;
    }
}

?>
