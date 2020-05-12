<?php
/**
 * @copyright Copyright © 2020 CreenSight. All rights reserved.
 * @author CreenSight Development Team <magento@creensight.com>
 */

namespace CreenSight\DisableCompare\Model\Helper;

use CreenSight\Core\Model\Helper\ConfigProvider as CoreConfigProvider;

/**
 * Class ConfigProvider
 * @package CreenSight\DisableCompare\Model\Helper
 */
class ConfigProvider
{
    /**
     * @var string
     */
    const XML_PATH_GENERAL_ENABLED = 'disable_compare/general/enabled';

    /**
     * @var CoreConfigProvider
     */
    protected $configProvider;

    /**
     * ConfigProvider constructor.
     *
     * @param CoreConfigProvider $configProvider
     */
    public function __construct(
        CoreConfigProvider $configProvider
    ) {
        $this->configProvider = $configProvider;
    }

    /**
     * @param string $path
     * @param number $storeId
     * @return mixed
     */
    public function execute($path, $storeId = null)
    {
        return $this->configProvider->execute($path, $storeId);
    }
}
