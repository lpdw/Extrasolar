<?php // src/AppBundle/Validator/Constraints/AxisCanBeConvertedValidator.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AxisCanBeConvertedValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {

      $axisUnit = $this->context->getRoot()->get('UA')->getData();
      $disance = $this->context->getRoot()->get('distance')->getData();
      if ($axisUnit == 1 && empty($distance)){
        $this->context->buildViolation($constraint->message)
            ->setParameter('%string%', $value)
            ->addViolation();
            return false;
      }
      return true;
    }
}
 ?>
