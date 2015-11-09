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

namespace WellCommerce\Bundle\CoreBundle\Helper\Mailer;

/**
 * Interface MailerHelperInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface MailerHelperInterface
{
    /**
     * Sends an e-mail message
     *
     * @param string $recipient
     * @param string $title
     * @param string $view
     * @param array  $parameters
     */
    public function sendEmail($recipient, $title, $view, array $parameters = []);
}