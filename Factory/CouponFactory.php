<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CouponBundle\Factory;

use WellCommerce\Bundle\CoreBundle\Factory\AbstractFactory;
use WellCommerce\Bundle\AppBundle\Entity\Coupon;

/**
 * Class CouponFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CouponFactory extends AbstractFactory
{
    /**
     * @return \WellCommerce\Bundle\AppBundle\Entity\CouponInterface
     */
    public function create()
    {
        $coupon = new Coupon();

        return $coupon;
    }
}
