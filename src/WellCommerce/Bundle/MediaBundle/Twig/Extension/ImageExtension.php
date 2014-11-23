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
namespace WellCommerce\Bundle\MediaBundle\Twig\Extension;

use WellCommerce\Bundle\CoreBundle\Helper\Image\ImageHelperInterface;
use WellCommerce\Bundle\MediaBundle\Entity\Media;
use WellCommerce\Bundle\ProductBundle\Entity\ProductPhoto;

/**
 * Class ImageExtension
 *
 * @package WellCommerce\Bundle\MediaBundle\Twig\Extension
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ImageExtension extends \Twig_Extension
{
    /**
     * @var ImageHelperInterface
     */
    protected $helper;

    /**
     * Constructor
     *
     * @param ImageHelperInterface $helper
     */
    public function __construct(ImageHelperInterface $helper)
    {
        $this->helper = $helper;
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('image', [$this, 'getImage'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param $path
     * @param $filter
     *
     * @return mixed
     */
    public function getImage($path, $filter)
    {
        return $this->helper->getImage($path, $filter);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'image';
    }
}
