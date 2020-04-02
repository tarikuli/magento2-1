<?php
/**
 * Grid Logger Handler.
 * @category  Born
 * @package   Born_VendorGrid
 * @author    Born
 * @copyright Copyright (c) 2010-2017 Born Software Private Limited (https://born.com)
 * @license   https://store.born.com/license.html
 */

namespace Born\VendorGrid\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level.
     *
     * @var int
     */
    public $loggerType = Logger::INFO;

    /**
     * File name.
     *
     * @var string
     */
    public $fileName = '/var/log/grid.log';
}
