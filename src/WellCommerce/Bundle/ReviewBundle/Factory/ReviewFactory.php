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

namespace WellCommerce\Bundle\ReviewBundle\Factory;

use WellCommerce\Bundle\DoctrineBundle\Factory\AbstractEntityFactory;
use WellCommerce\Bundle\ReviewBundle\Entity\Review;
use WellCommerce\Bundle\ReviewBundle\Entity\ReviewInterface;

/**
 * Class ReviewFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ReviewFactory extends AbstractEntityFactory
{
    public function create() : ReviewInterface
    {
        /** @var  $review ReviewInterface */
        $review = new Review();
        $review->setNick('');
        $review->setRating(5);
        $review->setRatingLevel(5);
        $review->setRatingRecommendation(5);
        $review->setReview('');
        $review->setEnabled(true);

        return $review;
    }
}
