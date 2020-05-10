<?php
/**
 * @copyright Copyright © 2020 CreenSight. All rights reserved.
 * @author CreenSight Development Team <magento@creensight.com>
 */

namespace CreenSight\DisableCompare\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use CreenSight\DisableCompare\Model\Helper\ConfigProvider;

class AddDisableCompareHandle implements ObserverInterface
{
    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * AddDisableCompareHandle constructor.
     *
     * @param CoreConfigProvider $configProvider
     */
    public function __construct(
        ConfigProvider $configProvider
    ) {
        $this->configProvider = $configProvider;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $enabled = $this->configProvider->execute(ConfigProvider::XML_PATH_GENERAL_ENABLED);

        if ($enabled) {
            $layout = $observer->getData('layout');
            $layout->getUpdate()->addHandle('remove_compare_products');
        }
    }
}
