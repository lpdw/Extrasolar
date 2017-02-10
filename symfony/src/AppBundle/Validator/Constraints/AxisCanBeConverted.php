<?php
// src/AppBundle/Validator/Constraints/AxisCanBeConverted.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AxisCanBeConverted extends Constraint
{
    public $message = 'The axis : "%string%" , cannot be converted, the distance is missing.';
}
