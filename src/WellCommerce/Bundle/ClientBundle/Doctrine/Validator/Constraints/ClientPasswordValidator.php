<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ClientBundle\Doctrine\Validator\Constraints;

use Doctrine\Common\Util\Debug;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use WellCommerce\Bundle\ClientBundle\Entity\ClientDetailsInterface;
use WellCommerce\Bundle\ClientBundle\Repository\ClientRepositoryInterface;
use WellCommerce\Bundle\CoreBundle\Helper\Router\RouterHelperInterface;

/**
 * Class ClientPasswordValidator
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ClientPasswordValidator extends ConstraintValidator
{
    /**
     * Validate the route entity
     *
     * @param mixed      $entity
     * @param Constraint $constraint
     */
    public function validate($entity, Constraint $constraint)
    {
        if (!$entity instanceof ClientDetailsInterface) {
            throw new \InvalidArgumentException('Expected instance of ClientDetailsInterface');
        }

        $result = $entity->isPasswordConfirmed();

        // route is unique always if no result was found
        if (true === $result) {
            return;
        }

        if ($this->context instanceof ExecutionContextInterface) {
            $this->context
                ->buildViolation($constraint->message)
                ->atPath('hashedPassword')
                ->addViolation();

            $this->context
                ->buildViolation($constraint->message)
                ->atPath('passwordConfirm')
                ->addViolation();
        }
    }
}
